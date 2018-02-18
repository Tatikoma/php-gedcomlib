<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\Individual;
class Funerals extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'FUNERALS';


    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'PLAC' => \Tatikoma\Gedcom\Parser\Common\Place::class,
        'DATE' => \Tatikoma\Gedcom\Parser\Common\Date::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Place
     */
    public $place;

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Date
     */
    public $date;
}