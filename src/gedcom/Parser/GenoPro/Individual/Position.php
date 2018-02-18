<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\Individual;
class Position extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'POSITION';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'BOUNDARYRECT' => BoundaryRect::class,
        'GENOMAP' => \Tatikoma\Gedcom\Parser\GenoPro\GenoMap::class,
        'TOP' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Top::class,
        'BOTTOM' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Bottom::class,
    ];

    /**
     * @var BoundaryRect
     */
    public $boundaryRect;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GenoMap
     */
    public $genoMap;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Top
     */
    public $top;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Bottom
     */
    public $bottom;
}