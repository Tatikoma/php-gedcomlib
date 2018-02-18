<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Colors;
class Border extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'BORDER';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'OUTLINE' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Colors\Border\Outline::class,
        'FILL' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Fill::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Colors\Border\Outline
     */
    public $outline;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Fill
     */
    public $fill;
}