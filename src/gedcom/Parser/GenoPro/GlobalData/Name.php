<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\GlobalData;
class Name extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'NAME';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'FULL' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Name\Full::class,
        'DISPLAY' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Name\Display::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Name
     */
    public $full;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Name\Display
     */
    public $display;
}