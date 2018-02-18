<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Name;
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
        'FORMAT' => \Tatikoma\Gedcom\Parser\GenoPro\Format::class,
        'LINES' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Name\Display\Lines::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Format
     */
    public $format;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Name\Display\Lines
     */
    public $lines;
}