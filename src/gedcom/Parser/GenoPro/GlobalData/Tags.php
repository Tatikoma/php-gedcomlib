<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\GlobalData;
class Tags extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'TAGS';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'ID' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\ID::class,
        'TAGDATA' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Tags\TagData::class,
        'DIALOGLAYOUT' => DialogLayout::class,
    ];

    /**
     * @var ID
     */
    public $iD;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Tags\TagData
     */
    public $tagData = [];

    /**
     * @var DialogLayout
     */
    public $dialogLayout;
}