<?php

namespace Tatikoma\Gedcom\Parser\Common;
class ObjectData extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'OBJE';

    static protected $classMap = [
        'FORM' => \Tatikoma\Gedcom\Parser\Common\Format::class,
    ];

    /**
     * @var Title A description of a specific writing or other work, such as the title of a book when used in a source
     * context, or a formal designation used by an individual in connection with positions of royalty or other
     * social status, such as Grand Duke.
     */
    public $title;
    /**
     * @var File An information storage place that is ordered and arranged for preservation and reference.
     */
    public $file;
    /**
     * @var Format An assigned name given to a consistent format in which information can be conveyed.
     */
    public $format;
    /**
     * @var Note[] Additional information provided by the submitter for understanding the enclosing data.
     */
    public $note;

}