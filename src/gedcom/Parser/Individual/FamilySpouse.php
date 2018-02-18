<?php

namespace Tatikoma\Gedcom\Parser\Individual;
class FamilySpouse extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'FAMS';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'NOTE' => \Tatikoma\Gedcom\Parser\Common\Note::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Note[] Additional information provided by the submitter for understanding the enclosing data.
     */
    public $note;
}