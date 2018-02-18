<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\GlobalData;
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
        'TAG' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Tag::class,
        'COLORS' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Colors::class,
        'FLAGS' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Flags::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Tag
     */
    public $tag;
    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Colors
     */
    public $colors;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Flags
     */
    public $flags;
}