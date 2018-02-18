<?php

namespace Tatikoma\Gedcom\Parser\Common;
class Place extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'PLAC';

    static protected $classMap = [
        'FORM' => \Tatikoma\Gedcom\Parser\Common\Format::class,
        // GenoPro
        '_XREF' => \Tatikoma\Gedcom\Parser\GenoPro\XRef::class,
    ];

    /**
     * @var Format An assigned name given to a consistent format in which information can be conveyed.
     */
    public $format;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\XRef
     */
    public $xRef;
}