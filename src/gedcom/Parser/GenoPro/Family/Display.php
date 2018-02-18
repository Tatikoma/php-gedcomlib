<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\Family;
class Display extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'DISPLAY';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'COLOR' => \Tatikoma\Gedcom\Parser\GenoPro\Color::class,
        'SOLIDLINE' => \Tatikoma\Gedcom\Parser\GenoPro\SolidLine::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Color
     */
    public $color;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\SolidLine
     */
    public $solidLine;
}