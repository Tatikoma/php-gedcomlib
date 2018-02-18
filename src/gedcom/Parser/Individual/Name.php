<?php

namespace Tatikoma\Gedcom\Parser\Individual;
class Name extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'NAME';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'NPFX' => \Tatikoma\Gedcom\Parser\Individual\Name\NamePrefix::class,
        'GIVN' => \Tatikoma\Gedcom\Parser\Individual\Name\GivenName::class,
        'NICK' => \Tatikoma\Gedcom\Parser\Individual\Name\NickName::class,
        'SPFX' => \Tatikoma\Gedcom\Parser\Individual\Name\SurnamePrefix::class,
        'SURN' => \Tatikoma\Gedcom\Parser\Individual\Name\Surname::class,
        'NSFX' => \Tatikoma\Gedcom\Parser\Individual\Name\NameSuffix::class,
        'SOUR' => \Tatikoma\Gedcom\Parser\Common\Source::class,
        'NOTE' => \Tatikoma\Gedcom\Parser\Common\Note::class,
        // GenoPro
        'DISPLAY' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Name\Display::class,
        'MIDDLE' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Name\Middle::class,
        'FORMAT' => \Tatikoma\Gedcom\Parser\GenoPro\Format::class,
        '_MARN' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Name\MarriageName::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Name\NamePrefix Text which appears on a name line before the given and surname parts of a name.
     * i.e. (Lt. Cmndr.) Joseph /Allen/ jr.
     * In this example Lt. Cmndr. is considered as the name prefix portion.
     */
    public $namePrefix;

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Name\GivenName A given or earned name used for official identification of a person.
     */
    public $givenName;

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Name\NickName A descriptive or familiar that is used instead of, or in addition to, one's proper name.
     */
    public $nickName;

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Name\SurnamePrefix A name piece used as a non-indexing pre-part of a surname.
     */
    public $surnamePrefix;

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Name\Surname A family name passed on or used by members of a family.
     */
    public $surname;

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Name\NameSuffix Text which appears on a name line after or behind the given and surname parts of a name.
     * i.e. Lt. Cmndr. Joseph /Allen/ (jr.)
     * In this example jr. is considered as the name suffix portion.
     */
    public $nameSuffix;

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Source[] The initial or original material from which information was obtained.
     */
    public $source;

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Note[] Additional information provided by the submitter for understanding the enclosing data.
     */
    public $note;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Name\Display GenoPRO
     */
    public $display;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Name\Middle GenoPRO
     */
    public $middle;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Format
     */
    public $format;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Name\MarriageName
     */
    public $marriageName;
}