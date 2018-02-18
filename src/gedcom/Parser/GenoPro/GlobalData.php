<?php

namespace Tatikoma\Gedcom\Parser\GenoPro;

class GlobalData extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'GLOBAL';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'NAME' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Name::class,
        'FONT' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Font::class,
        'DISPLAY' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display::class,
        'TAGS' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Tags::class,
        'ACTIVEGENOMAP' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\ActiveGenoMap::class,
        'OPTIONS' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Options::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Name
     */
    public $name;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Font
     */
    public $font;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display
     */
    public $display;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Tags
     */
    public $tags = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\ActiveGenoMap
     */
    public $activeGenoMap;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Options
     */
    public $options;
}