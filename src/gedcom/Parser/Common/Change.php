<?php

namespace Tatikoma\Gedcom\Parser\Common;
class Change extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'CHAN';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'DATE' => \Tatikoma\Gedcom\Parser\Common\Date::class,
        'TIME' => \Tatikoma\Gedcom\Parser\Common\Time::class,
        'NOTE' => \Tatikoma\Gedcom\Parser\Common\Note::class,
    ];

    /**
     * @var Date The time of an event in a calendar format.
     */
    public $date;
    /**
     * @var Time A time value in a 24-hour clock format, including hours, minutes, and optional seconds, separated by a
     * colon (:). Fractions of seconds are shown in decimal notation.
     */
    public $time;

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Note[] Additional information provided by the submitter for understanding the enclosing data.
     */
    public $note;
}