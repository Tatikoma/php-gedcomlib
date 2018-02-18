<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display;
class Top extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'TOP';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'LEFT' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Left::class,
        'RIGHT' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Right::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Left
     */
    public $left;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Right
     */
    public $right;
}