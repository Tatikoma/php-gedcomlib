<?php

namespace Tatikoma\Gedcom\Parser;

class Head extends BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'HEAD';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'CHAR' => \Tatikoma\Gedcom\Parser\Head\Character::class,
        'CORP' => \Tatikoma\Gedcom\Parser\Common\Corporate::class,
        'DATE' => \Tatikoma\Gedcom\Parser\Common\Date::class,
        'DEST' => \Tatikoma\Gedcom\Parser\Head\Destination::class,
        'FILE' => \Tatikoma\Gedcom\Parser\Common\File::class,
        'GEDC' => \Tatikoma\Gedcom\Parser\Head\Gedcom::class,
        'LANG' => \Tatikoma\Gedcom\Parser\Head\Language::class,
        'NOTE' => \Tatikoma\Gedcom\Parser\Common\Note::class,
        'PLAC' => \Tatikoma\Gedcom\Parser\Common\Place::class,
        'SOUR' => \Tatikoma\Gedcom\Parser\Head\Source::class,
        'SUBN' => \Tatikoma\Gedcom\Parser\Common\Submission::class,
        'SUBM' => \Tatikoma\Gedcom\Parser\Common\Submitter::class,
        '_PROJECT_GUID' => \Tatikoma\Gedcom\Parser\Head\ProjectGUID::class,
        '_EXPORTED_FROM_SITE_ID' => \Tatikoma\Gedcom\Parser\Head\SiteExportedId::class,
    ];
    /**
     * @var \Tatikoma\Gedcom\Parser\Head\Gedcom
     */
    public $gedcom;
    /**
     * @var \Tatikoma\Gedcom\Parser\Head\Character An indicator of the character set used in writing this automated information.
     */
    public $character;
    /**
     * @var \Tatikoma\Gedcom\Parser\Head\Language The name of the language used in a communication or transmission of information.
     */
    public $language;
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Source The initial or original material from which information was obtained.
     */
    public $source;
    /**
     * @var \Tatikoma\Gedcom\Parser\Head\Destination A system receiving data.
     */
    public $destination;
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Date The time of an event in a calendar format.
     */
    public $date;
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\File An information storage place that is ordered and arranged for preservation and reference.
     */
    public $file;
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Corporate A name of an institution, agency, corporation, or company.
     */
    public $corporate;
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Note Additional information provided by the submitter for understanding the enclosing data.
     */
    public $note;
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Place A jurisdictional name to identify the place or location of an event.
     */
    public $place;
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Submission Pertains to a collection of data issued for processing.
     */
    public $submission;
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Submitter An individual or organization who contributes genealogical data to a file or transfers it to someone else.
     */
    public $submitter;
    /**
     * @var \Tatikoma\Gedcom\Parser\Head\ProjectGUID Unknown tag, obtained from MyHeritage
     */
    public $projectGUID;
    /**
     * @var \Tatikoma\Gedcom\Parser\Head\SiteExportedId Unknown tag, obtained from MyHeritage
     */
    public $siteExportedId;
}