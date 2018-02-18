<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display;
class Fill extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'FILL';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'TOP' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Top::class,
        'BOTTOM' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Bottom::class,
        'MASK' => Mask::class,
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
     * @var Mask
     */
    public $mask;
}