<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Tags;
class TagData extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'TAGDATA';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'NAME' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Name::class,
        'DISPLAYNAME' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\DisplayName::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Name
     */
    public $name;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\DisplayName
     */
    public $displayName;
}