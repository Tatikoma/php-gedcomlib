<?php

namespace Tatikoma\Gedcom;

class Record
{
    /**
     * @var int depth level
     */
    public $depthLevel;
    /**
     * @var string record type
     */
    public $type;
    /**
     * @var string record content
     */
    public $content;
    /**
     * @var string referencing id
     */
    public $refId;

    /** @noinspection PhpUnusedPrivateMethodInspection */
    private function __construct()
    {
    }

    /**
     * Construct record from source row
     * @param string $row row from file
     * @return Record
     */
    static public function fromFileRow($row)
    {
        $result = new Record();
        $row = explode(' ', $row);
        $result->depthLevel = (int)array_shift($row);
        $result->type = array_shift($row);
        if ($result->type[0] === '@') {
            $result->refId = $result->type;
            $result->type = array_shift($row);
        }
        $result->type = strtoupper($result->type);
        $result->content = implode(' ', $row);
        return $result;
    }

    /** @noinspection PhpUnusedPrivateMethodInspection */
    private function __clone()
    {
    }

    /** @noinspection PhpUnusedPrivateMethodInspection */
    private function __wakeup()
    {
    }
}