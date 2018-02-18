<?php

namespace Tatikoma\Gedcom\Parser\Common;
class Event extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'EVEN';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'ROLE' => \Tatikoma\Gedcom\Parser\Common\Role::class,
        'DATE' => \Tatikoma\Gedcom\Parser\Common\Date::class,
        'PLAC' => \Tatikoma\Gedcom\Parser\Common\Place::class,
    ];

    /**
     * @var Role A name given to a role played by an individual in connection with an event.
     */
    public $role;
    /**
     * @var Date The time of an event in a calendar format.
     */
    public $date;
    /**
     * @var Place A jurisdictional name to identify the place or location of an event.
     */
    public $place;
}