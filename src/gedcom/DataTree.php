<?php

namespace Tatikoma\Gedcom;

/**
 * Class Data represents all geno data
 * @package Tatikoma\Gedcom
 */
class DataTree extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser Link to last assigned value
     */
    public $lastAssignedLink;

    /**
     * @var \Tatikoma\Gedcom\Parser\Head
     */
    public $head;

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual[]
     */
    public $individual = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Family[]
     */
    public $family = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Source[]
     */
    public $source = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Trailer
     */
    public $trailer;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData Geno Pro specific Tag
     */
    public $globalData;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GenoMap Geno Pro specific Tag
     */
    public $genoMap = [];

    /**
     * Dump all tree in human-readable format
     */
    public function dump()
    {
        $this->dumpTree($this, 0);
    }
}