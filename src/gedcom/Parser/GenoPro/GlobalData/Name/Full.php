<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Name;
class Full extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'FULL';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'FORMAT' => \Tatikoma\Gedcom\Parser\GenoPro\Format::class
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Name
     */
    public $format;
}