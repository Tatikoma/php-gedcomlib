<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\Individual;
class Source extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'SOURCE';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'SOURCES' => Sources::class,
    ];

    /**
     * @var Sources
     */
    public $sources;
}