<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\GlobalData;
class DialogLayout extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'DIALOGLAYOUT';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'NAME' => Name::class,
        'DESCRIPTION' => \Tatikoma\Gedcom\Parser\GenoPro\Description::class,
        'TAGS' => Tags::class,
    ];

    /**
     * @var Name
     */
    public $name;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Description
     */
    public $description;

    /**
     * @var Tags
     */
    public $tags = [];
}