<?php

namespace Tatikoma\Gedcom\Parser\Individual;
class FamilyChild extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'FAMC';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'NOTE' => \Tatikoma\Gedcom\Parser\Common\Note::class,
        'PEDI' => \Tatikoma\Gedcom\Parser\Individual\FamilyChild\Pedigree::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\FamilyChild\Pedigree Information pertaining to an individual to parent lineage chart.
     */
    public $pedigree;

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Note[] Additional information provided by the submitter for understanding the enclosing data.
     */
    public $note;
}