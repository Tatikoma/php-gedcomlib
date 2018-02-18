<?php

namespace Tatikoma\Gedcom;

class Parser
{
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'FAM' => \Tatikoma\Gedcom\Parser\Family::class,
        'HEAD' => \Tatikoma\Gedcom\Parser\Head::class,
        'INDI' => \Tatikoma\Gedcom\Parser\Individual::class,
        'NOTE' => \Tatikoma\Gedcom\Parser\Common\Note::class,
        'OBJE' => \Tatikoma\Gedcom\Parser\Common\ObjectData::class,
        'REPO' => \Tatikoma\Gedcom\Parser\Repository::class,
        'SOUR' => \Tatikoma\Gedcom\Parser\Common\Source::class,
        'SUBM' => \Tatikoma\Gedcom\Parser\Common\Submitter::class,
        'SUBN' => \Tatikoma\Gedcom\Parser\Common\Submission::class,
        'TRLR' => \Tatikoma\Gedcom\Parser\Trailer::class,
        // GenoPRO
        'GLOBAL' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData::class,
        'GENOMAP' => \Tatikoma\Gedcom\Parser\GenoPro\GenoMap::class,
    ];
    /**
     * @var resource file handle
     */
    protected $handle;
    /**
     * @var string encoding of file
     */
    protected $encoding;

    /**
     * @param string $file path to .ged file to parse
     * @return DataTree
     */
    public function load($file)
    {
        if (!is_readable($file)) {
            throw new \RuntimeException(strtr('Cannot load :file, file is not readable.', [
                ':file' => $file,
            ]));
        }
        $this->handle = fopen($file, 'rb');
        $row = fgets($this->handle);
        if ($row === false) {
            throw new \RuntimeException('Empty file given');
        }
        $row = $this->parseByteOrderMask($row);

        global $data;
        $data = new DataTree();

        /**
         * @var \Tatikoma\Gedcom\Parser\BaseParser[] $parserList
         */
        $parserList = [];
        $previousDepthLevel = -1;
        do {
            $record = $this->loadRecord($row);

            if ($record->type == 'CONC' || $record->type == 'CONT') {
                if ($record->type == 'CONT') {
                    $data->lastAssignedLink->value .= "\r\n";
                }
                $data->lastAssignedLink->value .= $record->content;
                continue;
            }

            if ($previousDepthLevel >= $record->depthLevel) {
                $unsetDepth = $record->depthLevel;
                while (isset($parserList[$unsetDepth])) {
                    unset($parserList[$unsetDepth]);
                    $unsetDepth++;
                }
                $parserList = array_values($parserList);
            }

            if ($record->depthLevel === 0) {
                if (!isset(self::$classMap[$record->type])) {
                    throw new \RuntimeException(strtr('Got unknown zero-level record :type', [
                        ':type' => $record->type,
                    ]));
                }

                /**
                 * @var \Tatikoma\Gedcom\Parser\BaseParser $parser
                 */
                $parser = new self::$classMap[$record->type];
                $parser->parse($record, $data, $parserList);
                $parserList[$record->depthLevel] = $parser;
            } else if (isset($parserList[$record->depthLevel - 1])) {
                $parserList[$record->depthLevel] = $parserList[$record->depthLevel - 1]->parse($record, $data, $parserList);
            } else {
                throw new \RuntimeException('File should start with zero-level record');
            }
            $previousDepthLevel = $record->depthLevel;
        } while (($row = fgets($this->handle)) !== false);
        fclose($this->handle);

        $data->lastAssignedLink = null;

        return $data;
    }

    /**
     * Parse & strip BOM
     * @param string $row first row of file
     * @return string row with stripped BOM
     */
    protected function parseByteOrderMask($row)
    {
        switch (true) {
            case strpos($row, "\xEF\xBB\xBF") === 0:
                $this->encoding = 'UTF-8';
                $row = substr($row, 3);
                break;
            default:
                throw new \RuntimeException('Cannot detect file encoding. This behavior is not implemented yet.');
                break;
        }
        return $row;
    }

    /**
     * Convert row to Record
     * @param string $row row from file
     * @return Record instance of
     */
    protected function loadRecord($row)
    {
        if ($this->encoding !== 'UTF-8') {
            $row = mb_convert_encoding($row, 'UTF-8', $this->encoding);
        }
        $row = trim($row);
        return Record::fromFileRow($row);
    }
}