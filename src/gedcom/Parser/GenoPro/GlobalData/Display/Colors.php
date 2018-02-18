<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display;
class Colors extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'COLORS';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'GENDER' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Colors\Gender::class,
        'BORDER' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Colors\Border::class,
        'LABEL' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Colors\Label::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Colors\Gender
     */
    public $gender;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Colors\Border
     */
    public $border;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Colors\Label
     */
    public $label;
}