<?php

namespace Tatikoma\Gedcom\Parser;
class BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = null;
    static protected $classMap = [];
    /**
     * @var string Tag main value
     */
    public $value;

    /**
     * @var string referencing id
     */
    public $refId;

    /**
     * Prevent getting undefined properties
     * @param $var
     */
    public function __get($var)
    {
        debug_print_backtrace(2);
        trigger_error("Property $var of class " . get_class($this) . " doesn't exists and cannot be get.", E_USER_ERROR);
    }

    /**
     * Prevent setting undefined properties
     * @param $var
     * @param $val
     */
    public function __set($var, $val)
    {
        debug_print_backtrace(2);
        trigger_error("Property $var of class " . get_class($this) . " doesn't exists and cannot be set.", E_USER_ERROR);
    }

    /**
     * @param \Tatikoma\Gedcom\Record $record
     * @param \Tatikoma\Gedcom\DataTree $data
     * @param BaseParser[] $parserList
     * @return $this|BaseParser
     */
    public function parse(\Tatikoma\Gedcom\Record $record, \Tatikoma\Gedcom\DataTree $data, array $parserList)
    {
        if ($record->type === static::RECORD_TYPE) {
            $normalizedParserList = array_values($parserList);
            $normalizedParserList[] = $this;
            foreach ($normalizedParserList as &$parserItem) {
                $parserItem = get_class($parserItem);
            }
            unset($parserItem);

            $this->value = $record->content;
            $this->refId = $record->refId;

            $path = $data;
            for ($i = 0; $i < count($normalizedParserList); $i++) {
                $pathItem = $normalizedParserList[$i];
                $pathItem = substr($pathItem, strrpos($pathItem, '\\') + 1);
                $pathItem = lcfirst($pathItem);
                if ($pathItem === 'chill') {
                    $x = 'debug';
                }
                $path = &$path->{$pathItem};
                if (is_array($path)) {
                    if ($i == count($normalizedParserList) - 1) {
                        $path = &$path[];
                    } else {
                        $path = &$path[count($path) - 1];
                    }
                }
            }

            if (!is_null($path)) {
                throw new \RuntimeException(strtr('Trying to overwrite record :type value (is it should be an array?)', [
                    ':type' => $record->type,
                ]));
            }

            $path = $this;
            $data->lastAssignedLink = $this;
            return $this;
        }

        if (!isset(static::$classMap[$record->type])) {
            throw new \RuntimeException(strtr('Got unknown record :type in parser :parser', [
                ':type' => $record->type,
                ':parser' => get_class($this),
            ]));
        }

        /**
         * @var \Tatikoma\Gedcom\Parser\BaseParser $parser
         */
        $parser = new static::$classMap[$record->type];
        $parser->parse($record, $data, $parserList);
        return $parser;
    }

    public function dumpTree(BaseParser $object, $nesting = 0)
    {
        $public = (new \ReflectionObject($object))->getProperties(\ReflectionProperty::IS_PUBLIC);;
        foreach ($public as $property) {
            $value = $object->{$property->name};
            if (empty($value)) {
                continue;
            }
            print str_repeat('-', $nesting * 2) . $property->name . " = ";
            if (is_object($value)) {
                if ($value instanceof BaseParser) {
                    print get_class($value) . "\n";
                    $this->dumpTree($value, $nesting + 1);
                } else {
                    throw new \RuntimeException(strtr('Got unexpected object :type instead of BaseParser', [
                        ':type' => get_class($value),
                    ]));
                }
            } elseif (is_array($value)) {
                print '(' . count($value) . ')' . "\n";
                for ($i = 0; $i < count($value); $i++) {
                    print str_repeat('-', $nesting * 2) . $property->name . '[' . $i . ']' . " = ";
                    if (is_object($value[$i])) {
                        print get_class($value[$i]) . "\n";
                        $this->dumpTree($value[$i], $nesting + 1);
                    } else {
                        print $value[$i] . "\n";
                    }
                }
            } else {
                print $value . "\n";
            }
        }
    }
}