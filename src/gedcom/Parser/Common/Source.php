<?php

namespace Tatikoma\Gedcom\Parser\Common;
class Source extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'SOUR';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'TEXT' => \Tatikoma\Gedcom\Parser\Common\Text::class,
        'NOTE' => \Tatikoma\Gedcom\Parser\Common\Note::class,
        'DATA' => \Tatikoma\Gedcom\Parser\Common\Data::class,
        'QUAY' => \Tatikoma\Gedcom\Parser\Common\QualityOfData::class,
        'PAGE' => \Tatikoma\Gedcom\Parser\Common\Page::class,
        'EVEN' => \Tatikoma\Gedcom\Parser\Common\Event::class,
        'TITL' => \Tatikoma\Gedcom\Parser\Common\Title::class,
        'RIN' => \Tatikoma\Gedcom\Parser\Common\RecordId::class,
    ];

    /**
     * @var Text The exact wording found in an original source document.
     */
    public $text;
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Note[] Additional information provided by the submitter for understanding the enclosing data.
     */
    public $note;
    /**
     * @var Data Pertaining to stored automated information.
     */
    public $data;
    /**
     * @var QualityOfData An assessment of the certainty of the evidence to support the conclusion drawn from evidence.
     */
    public $qualityOfData;
    /**
     * @var Page A number or description to identify where information can be found in a referenced work.
     */
    public $page;
    /**
     * @var Event[] Pertaining to a noteworthy happening related to an individual, a group, or an organization. An EVENt
     * structure is usually qualified or classified by a subordinate use of the TYPE tag.
     */
    public $event;

    /**
     * @var Title A description of a specific writing or other work, such as the title of a book when used in a source
     * context, or a formal designation used by an individual in connection with positions of royalty or other
     * social status, such as Grand Duke.
     */
    public $title;

    /**
     * @var RecordId A number assigned to a record by an originating automated system that can be used by a receiving
     * system to report results pertaining to that record.
     */
    public $recordId;
}