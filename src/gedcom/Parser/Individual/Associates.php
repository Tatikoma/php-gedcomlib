<?php

namespace Tatikoma\Gedcom\Parser\Individual;
class Associates extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'ASSO';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'RELA' => \Tatikoma\Gedcom\Parser\Common\Relationship::class,
        'SOUR' => \Tatikoma\Gedcom\Parser\Common\Source::class,
        'NOTE' => \Tatikoma\Gedcom\Parser\Common\Note::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Relationship A relationship value between the indicated contexts.
     */
    public $relationship;
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Source[] The initial or original material from which information was obtained.
     */
    public $source = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Note[] Additional information provided by the submitter for understanding the enclosing data.
     */
    public $note = [];

}