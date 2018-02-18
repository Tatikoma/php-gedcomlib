<?php

namespace Tatikoma\Gedcom\Parser\Individual;
class Death extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'DEAT';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'DATE' => \Tatikoma\Gedcom\Parser\Common\Date::class,
        'PLAC' => \Tatikoma\Gedcom\Parser\Common\Place::class,
        'SOUR' => \Tatikoma\Gedcom\Parser\Common\Source::class,
        'AGE' => Age::class,
        'CAUS' => \Tatikoma\Gedcom\Parser\Common\Cause::class,
        'NOTE' => \Tatikoma\Gedcom\Parser\Common\Note::class,
        // GenoPro
        'CAUSE' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Cause::class,
        'SOURCE' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Source::class,
        'DISPOSITION' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Disposition::class,
        'FUNERALS' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Funerals::class,
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
     * @var Age The age of the individual at the time an event occurred, or the age listed in the document.
     */
    public $age;

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Cause A description of the cause of the associated event or fact, such as the cause of death.
     */
    public $cause;

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Note[] Additional information provided by the submitter for understanding the enclosing data.
     */
    public $note;


    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Disposition
     */
    public $disposition;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Funerals
     */
    public $funerals;
}