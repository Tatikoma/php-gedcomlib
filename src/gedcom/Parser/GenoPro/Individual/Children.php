<?php

namespace Tatikoma\Gedcom\Parser\GenoPro\Individual;
class Children extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'CHILDREN';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'ORDER' => \Tatikoma\Gedcom\Parser\GenoPro\Order::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Order
     */
    public $order;
}