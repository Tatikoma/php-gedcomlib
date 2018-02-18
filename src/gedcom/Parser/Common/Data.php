<?php

namespace Tatikoma\Gedcom\Parser\Common;
class Data extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'DATA';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'EVEN' => \Tatikoma\Gedcom\Parser\Common\Event::class,
        'DATE' => \Tatikoma\Gedcom\Parser\Common\Date::class,
        'AGNC' => \Tatikoma\Gedcom\Parser\Common\Agency::class,
        'NOTE' => \Tatikoma\Gedcom\Parser\Common\Note::class,
        'TEXT' => \Tatikoma\Gedcom\Parser\Common\Text::class,
    ];

    /**
     * @var Event[] Pertaining to a noteworthy happening related to an individual, a group, or an organization. An EVENt
     * structure is usually qualified or classified by a subordinate use of the TYPE tag.
     */
    public $event = [];

    /**
     * @var Date The time of an event in a calendar format.
     */
    public $date;

    /**
     * @var Agency The institution or individual having authority and/or responsibility to manage or govern.
     */
    public $agency;

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Note[] Additional information provided by the submitter for understanding the enclosing data.
     */
    public $note;

    /**
     * @var Text The exact wording found in an original source document.
     */
    public $text;
}