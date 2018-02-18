<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Colors;
class Gender extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'GENDER';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'SYMBOL' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Colors\Gender\Symbol::class,
        'TEXT' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Colors\Gender\Text::class,
        'FILL' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Fill::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Colors\Gender\Symbol
     */
    public $symbol;
    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Colors\Gender\Text
     */
    public $text;
    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Fill[]
     */
    public $fill = [];
}