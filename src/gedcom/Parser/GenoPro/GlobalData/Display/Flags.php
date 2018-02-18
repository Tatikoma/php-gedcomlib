<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display;
class Flags extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'FLAGS';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'ENABLE' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Flags\Enable::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display\Flags\Enable
     */
    public $enable;
}