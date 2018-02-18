<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\Individual;
class Cause extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'CAUSE';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'DESCRIPTION' => \Tatikoma\Gedcom\Parser\GenoPro\Description::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Description
     */
    public $description;
}