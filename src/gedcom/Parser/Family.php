<?php

namespace Tatikoma\Gedcom\Parser;

class Family extends BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'FAM';

    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'HUSB' => \Tatikoma\Gedcom\Parser\Family\Husband::class,
        'WIFE' => \Tatikoma\Gedcom\Parser\Family\Wife::class,
        'CHIL' => \Tatikoma\Gedcom\Parser\Family\Child::class,
        'NCHI' => \Tatikoma\Gedcom\Parser\Common\ChildrenCount::class,
        'SUBM' => \Tatikoma\Gedcom\Parser\Common\Submitter::class,
        'RIN' => \Tatikoma\Gedcom\Parser\Common\RecordId::class,
        'CHAN' => \Tatikoma\Gedcom\Parser\Common\Change::class,
        'SLGS' => \Tatikoma\Gedcom\Parser\Family\SealingSpouse::class,
        'REFN' => \Tatikoma\Gedcom\Parser\Common\Reference::class,
        'NOTE' => \Tatikoma\Gedcom\Parser\Common\Note::class,
        'SOUR' => \Tatikoma\Gedcom\Parser\Common\Source::class,
        'OBJE' => \Tatikoma\Gedcom\Parser\Common\ObjectData::class,
        'EVEN' => \Tatikoma\Gedcom\Parser\Common\Event::class,
        'ANUL' => \Tatikoma\Gedcom\Parser\Family\Annulment::class,
        'CENS' => \Tatikoma\Gedcom\Parser\Common\Census::class,
        'DIV' => \Tatikoma\Gedcom\Parser\Family\Divorce::class,
        'DIVF' => \Tatikoma\Gedcom\Parser\Family\DivorceFiled::class,
        'ENGA' => \Tatikoma\Gedcom\Parser\Family\Engagement::class,
        'MARR' => \Tatikoma\Gedcom\Parser\Family\Marriage::class,
        'MARB' => \Tatikoma\Gedcom\Parser\Family\MarriageBann::class,
        'MARC' => \Tatikoma\Gedcom\Parser\Family\MarriageContract::class,
        'MARL' => \Tatikoma\Gedcom\Parser\Family\MarriageLicense::class,
        'MARS' => \Tatikoma\Gedcom\Parser\Family\MarriageSettlement::class,
        '_UID' => \Tatikoma\Gedcom\Parser\Common\UID::class,
        // GenoPro
        'POSITION' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Position::class,
        'DISPLAY' => \Tatikoma\Gedcom\Parser\GenoPro\Family\Display::class,
        'CHILDREN' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Children::class,
        'PICTURES' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Pictures::class,
        'RELATION' => \Tatikoma\Gedcom\Parser\GenoPro\Family\Relation::class,
        'SOURCES' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Sources::class,
        'UNIONS' => \Tatikoma\Gedcom\Parser\GenoPro\Family\Unions::class,
        'FAMILYLINE' => \Tatikoma\Gedcom\Parser\GenoPro\Family\FamilyLine::class,
        'CHILL' => \Tatikoma\Gedcom\Parser\GenoPro\Family\Chill::class,
    ];
    /**
     * @var \Tatikoma\Gedcom\Parser\Family\Husband An individual in the family role of a married man or father.
     */
    public $husband;
    /**
     * @var \Tatikoma\Gedcom\Parser\Family\Wife An individual in the role as a mother and/or married woman.
     */
    public $wife;
    /**
     * @var \Tatikoma\Gedcom\Parser\Family\Child[] The natural, adopted, or sealed (LDS) child of a father and a mother.
     */
    public $child = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\ChildrenCount The number of children that this person is known to be the parent of (all marriages) when subordinate
     * to an individual, or that belong to this family when subordinate to a FAM_RECORD.
     */
    public $childrenCount;
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Submitter[] An individual or organization who contributes genealogical data to a file or transfers it to someone else.
     */
    public $submitter = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\RecordId A number assigned to a record by an originating automated system that can be used by a receiving
     * system to report results pertaining to that record.
     */
    public $recordId;
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Change Indicates a change, correction, or modification. Typically used in connection with a DATE to specify
     * when a change in information occurred.
     */
    public $change;
    /**
     * @var \Tatikoma\Gedcom\Parser\Family\SealingSpouse[] A religious event pertaining to the sealing of a husband and wife in an LDS temple ceremony.
     */
    public $sealingSpouse = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Reference[] A description or number used to identify an item for filing, storage, or other reference purposes.
     */
    public $reference = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Note[] Additional information provided by the submitter for understanding the enclosing data.
     */
    public $note = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Source[] The initial or original material from which information was obtained.
     */
    public $source = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\ObjectData[] Pertaining to a grouping of attributes used in describing something. Usually referring to the data
     * required to represent a multimedia object, such an audio recording, a photograph of a person, or an
     * image of a document.
     */
    public $objectData = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Event[] Pertaining to a noteworthy happening related to an individual, a group, or an organization. An EVENt
     * structure is usually qualified or classified by a subordinate use of the TYPE tag.
     */
    public $event = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Family\Annulment[] Declaring a marriage void from the beginning (never existed).
     */
    public $annulment = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Census[] The event of the periodic count of the population for a designated locality, such as a national or state
     * Census.
     */
    public $census = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Family\Divorce[] An event of dissolving a marriage through civil action.
     */
    public $divorce = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Family\DivorceFiled[] An event of filing for a divorce by a spouse.
     */
    public $divorceFiled = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Family\Engagement[] An event of recording or announcing an agreement between two people to become married.
     */
    public $engagement = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Family\Marriage[] A legal, common-law, or customary event of creating a family unit of a man and a woman as husband
     * and wife.
     */
    public $marriage = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Family\MarriageBann[] An event of an official public notice given that two people intend to marry.
     */
    public $marriageBann = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Family\MarriageContract[] An event of recording a formal agreement of marriage, including the prenuptial agreement in which
     * marriage partners reach agreement about the property rights of one or both, securing property to their
     * children.
     */
    public $marriageContract = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Family\MarriageLicense[] An event of obtaining a legal license to marry.
     */
    public $marriageLicense = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Family\MarriageSettlement[] An event of creating an agreement between two people contemplating marriage, at which time they
     * agree to release or modify property rights that would otherwise arise from the marriage.
     */
    public $marriageSettlement = [];
    /**
     * @var \Tatikoma\Gedcom\Parser\Common\UID Generic UID (found in MyHeritage export)
     */
    public $uID;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Position
     */
    public $position;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Family\Display
     */
    public $display;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Children
     */
    public $children;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Pictures[]
     */
    public $pictures = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Family\Relation
     */
    public $relation;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Sources[]
     */
    public $sources = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Family\Unions[]
     */
    public $unions = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Family\FamilyLine
     */
    public $familyLine;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Family\Chill[]
     */
    public $chill = [];
}