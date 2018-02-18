<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\Individual;
class Disposition extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'DISPOSITION';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'TYPE' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Disposition\Type::class,
        'PLAC' => \Tatikoma\Gedcom\Parser\Common\Place::class,
        'DATE' => \Tatikoma\Gedcom\Parser\Common\Date::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Disposition\Type
     */
    public $type;

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Place
     */
    public $place;

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Date
     */
    public $date;
}