<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\Individual;
class Pictures extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'PICTURES';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'PRIMARY' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Pictures\Primary::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Pictures\Primary
     */
    public $primary;
}