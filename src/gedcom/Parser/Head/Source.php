<?php

namespace Tatikoma\Gedcom\Parser\Head;
class Source extends \Tatikoma\Gedcom\Parser\BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'SOUR';

    static protected $classMap = [
        'CORP' => \Tatikoma\Gedcom\Parser\Common\Corporate::class,
        'NAME' => \Tatikoma\Gedcom\Parser\Head\Source\Name::class,
        'VERS' => \Tatikoma\Gedcom\Parser\Common\Version::class,
        '_RTLSAVE' => \Tatikoma\Gedcom\Parser\Head\Source\RuntimeLibrary::class,
        'ADDR' => \Tatikoma\Gedcom\Parser\Common\Address::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Version Indicates which version of a product, item, or publication is being used or referenced.
     */
    public $version;
    /**
     * @var \Tatikoma\Gedcom\Parser\Head\Source\Name A word or combination of words used to help identify an individual, title, or other item. More than one
     * NAME line should be used for people who were known by multiple names.
     */
    public $name;
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Corporate A name of an institution, agency, corporation, or company.
     */
    public $corporate;
    /**
     * @var \Tatikoma\Gedcom\Parser\Head\Source\RuntimeLibrary Unknown tag, obtained in MyHeritage export
     */
    public $runtimeLibrary;
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Address The contemporary place, usually required for postal purposes, of an individual, a submitter of
     * information, a repository, a business, a school, or a company.
     */
    public $address;
}