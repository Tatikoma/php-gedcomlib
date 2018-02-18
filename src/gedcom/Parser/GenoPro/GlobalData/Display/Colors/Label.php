<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Colors;
class Label extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'LABEL';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'TOP' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Top::class,
        'BOTTOM' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Bottom::class,
        'FILL' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Fill::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Top
     */
    public $top;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Bottom
     */
    public $bottom;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Fill
     */
    public $fill;
}