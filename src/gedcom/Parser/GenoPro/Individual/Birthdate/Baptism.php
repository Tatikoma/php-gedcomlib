<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\Individual\Birthdate;
class Baptism extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'BAPTISM';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'DATE' => \Tatikoma\Gedcom\Parser\Common\Date::class,
        'PLAC' => \Tatikoma\Gedcom\Parser\Common\Place::class,
        'GODMOTHER' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Birthdate\Baptism\GodMother::class,
        'GODFATHER' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Birthdate\Baptism\GodFather::class,
        'OFFICIATOR' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Birthdate\Baptism\Officiator::class,
        'SOURCE' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Source::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Date
     */
    public $date;

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Place
     */
    public $place;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Birthdate\Baptism\GodMother
     */
    public $godMother;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Birthdate\Baptism\GodFather
     */
    public $godFather;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Birthdate\Baptism\Officiator
     */
    public $officiator;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Source
     */
    public $source;
}