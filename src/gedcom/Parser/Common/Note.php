<?php

namespace Tatikoma\Gedcom\Parser\Common;
class Note extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'NOTE';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'SOUR' => \Tatikoma\Gedcom\Parser\Common\Source::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Source[] The initial or original material from which information was obtained.
     */
    public $source;
}