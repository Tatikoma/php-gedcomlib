<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\Individual\Birthdate\Baptism;
class Officiator extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'OFFICIATOR';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'TITL' => \Tatikoma\Gedcom\Parser\Common\Title::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Title
     */
    public $title;
}