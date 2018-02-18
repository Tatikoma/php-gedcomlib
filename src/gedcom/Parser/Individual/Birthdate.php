<?php

namespace Tatikoma\Gedcom\Parser\Individual;
class Birthdate extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'BIRT';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'DATE' => \Tatikoma\Gedcom\Parser\Common\Date::class,
        'PLAC' => \Tatikoma\Gedcom\Parser\Common\Place::class,
        'SOUR' => \Tatikoma\Gedcom\Parser\Common\Source::class,
        'NOTE' => \Tatikoma\Gedcom\Parser\Common\Note::class,
        // GenoPro
        'SOURCE' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Source::class,
        'CEREMONYTYPE' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Birthdate\CeremonyType::class,
        'DOCTOR' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Birthdate\Doctor::class,
        'BAPTISM' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Birthdate\Baptism::class,
        'PREGNANCYLENGTH' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Birthdate\PregnancyLength::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Date The time of an event in a calendar format.
     */
    public $date;

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Place A jurisdictional name to identify the place or location of an event.
     */
    public $place;

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Source[] The initial or original material from which information was obtained.
     */
    public $source = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Note[] Additional information provided by the submitter for understanding the enclosing data.
     */
    public $note = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Birthdate\CeremonyType
     */
    public $ceremonyType;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Birthdate\Doctor
     */
    public $doctor;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Birthdate\Baptism
     */
    public $baptism;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Birthdate\PregnancyLength
     */
    public $pregnancyLength;
}