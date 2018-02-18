<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\Family;
class FamilyLine extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'FAMILYLINE';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
    ];

}