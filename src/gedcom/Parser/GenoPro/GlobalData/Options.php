<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\GlobalData;
class Options extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'OPTIONS';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'CREATENAMELESSBOOKMARKS' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Options\CreateNamelessBookmarks::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Options\CreateNamelessBookmarks
     */
    public $createNamelessBookmarks;
}