<?php

namespace Tatikoma\Gedcom\Parser\Head;
class Gedcom extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'GEDC';

    static protected $classMap = [
        'FORM' => \Tatikoma\Gedcom\Parser\Common\Format::class,
        'VERS' => \Tatikoma\Gedcom\Parser\Common\Version::class,
    ];


    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Version Indicates which version of a product, item, or publication is being used or referenced.
     */
    public $version;
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Format An assigned name given to a consistent format in which information can be conveyed.
     */
    public $format;
}