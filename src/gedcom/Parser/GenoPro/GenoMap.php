<?php

namespace Tatikoma\Gedcom\Parser\GenoPro;

class GenoMap extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'GENOMAP';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'NAME' => \Tatikoma\Gedcom\Parser\GenoPro\GenoMap\Name::class,
        'ZOOM' => \Tatikoma\Gedcom\Parser\GenoPro\GenoMap\Zoom::class,
        'POSITION' => \Tatikoma\Gedcom\Parser\GenoPro\GenoMap\Position::class,
        'BOUNDARYRECT' => \Tatikoma\Gedcom\Parser\GenoPro\GenoMap\BoundaryRect::class,
        'SELECTION' => \Tatikoma\Gedcom\Parser\GenoPro\GenoMap\Selection::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GenoMap\Name
     */
    public $name;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GenoMap\Zoom
     */
    public $zoom;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GenoMap\Position
     */
    public $position;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GenoMap\BoundaryRect
     */
    public $boundaryRect;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GenoMap\Selection
     */
    public $selection;
}