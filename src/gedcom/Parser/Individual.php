<?php

namespace Tatikoma\Gedcom\Parser;

class Individual extends BaseParser
{
    /**
     * @var string Record Type
     */
    const RECORD_TYPE = 'INDI';
    /**
     * @var \Tatikoma\Gedcom\Parser\BaseParser[] $classMap
     */
    static protected $classMap = [
        'NAME' => \Tatikoma\Gedcom\Parser\Individual\Name::class,
        'ALIA' => \Tatikoma\Gedcom\Parser\Individual\Alias::class,
        'SEX' => \Tatikoma\Gedcom\Parser\Individual\Sex::class,
        'RIN' => \Tatikoma\Gedcom\Parser\Common\RecordId::class,
        'RESN' => \Tatikoma\Gedcom\Parser\Individual\Restriction::class,
        'RFN' => \Tatikoma\Gedcom\Parser\Individual\RecordFile::class,
        'AFN' => \Tatikoma\Gedcom\Parser\Individual\AncestralFile::class,
        'CHAN' => \Tatikoma\Gedcom\Parser\Common\Change::class,
        'FAMS' => \Tatikoma\Gedcom\Parser\Individual\FamilySpouse::class,
        'FAMC' => \Tatikoma\Gedcom\Parser\Individual\FamilyChild::class,
        'ASSO' => \Tatikoma\Gedcom\Parser\Individual\Associates::class,
        'ANCI' => \Tatikoma\Gedcom\Parser\Individual\AncestorInterest::class,
        'DESI' => \Tatikoma\Gedcom\Parser\Individual\DescendantInterest::class,
        'SUBM' => \Tatikoma\Gedcom\Parser\Common\Submitter::class,
        'REFN' => \Tatikoma\Gedcom\Parser\Common\Reference::class,
        'BAPL' => \Tatikoma\Gedcom\Parser\Individual\BaptismLDS::class,
        'CONL' => \Tatikoma\Gedcom\Parser\Individual\ConfirmationLDS::class,
        'ENDL' => \Tatikoma\Gedcom\Parser\Individual\Endowment::class,
        'SLGC' => \Tatikoma\Gedcom\Parser\Individual\SealingChild::class,
        'OBJE' => \Tatikoma\Gedcom\Parser\Common\ObjectData::class,
        'NOTE' => \Tatikoma\Gedcom\Parser\Common\Note::class,
        'SOUR' => \Tatikoma\Gedcom\Parser\Common\Source::class,
        'ADOP' => \Tatikoma\Gedcom\Parser\Individual\Adoption::class,
        'BIRT' => \Tatikoma\Gedcom\Parser\Individual\Birthdate::class,
        'BAPM' => \Tatikoma\Gedcom\Parser\Individual\Baptism::class,
        'BARM' => \Tatikoma\Gedcom\Parser\Individual\BarMitzvah::class,
        'BASM' => \Tatikoma\Gedcom\Parser\Individual\BasMitzvah::class,
        'BLES' => \Tatikoma\Gedcom\Parser\Individual\Blessing::class,
        'BURI' => \Tatikoma\Gedcom\Parser\Individual\Burial::class,
        'CENS' => \Tatikoma\Gedcom\Parser\Common\Census::class,
        'CHR' => \Tatikoma\Gedcom\Parser\Individual\Christening::class,
        'CHRA' => \Tatikoma\Gedcom\Parser\Individual\AdultChristening::class,
        'CONF' => \Tatikoma\Gedcom\Parser\Individual\Confirmation::class,
        'CREM' => \Tatikoma\Gedcom\Parser\Individual\Cremation::class,
        'DEAT' => \Tatikoma\Gedcom\Parser\Individual\Death::class,
        'EMIG' => \Tatikoma\Gedcom\Parser\Individual\Emigration::class,
        'FCOM' => \Tatikoma\Gedcom\Parser\Individual\FirstCommunion::class,
        'GRAD' => \Tatikoma\Gedcom\Parser\Individual\Graduation::class,
        'IMMI' => \Tatikoma\Gedcom\Parser\Individual\Immigration::class,
        'NATU' => \Tatikoma\Gedcom\Parser\Individual\Naturalization::class,
        'ORDN' => \Tatikoma\Gedcom\Parser\Individual\Ordination::class,
        'RETI' => \Tatikoma\Gedcom\Parser\Individual\Retirement::class,
        'PROB' => \Tatikoma\Gedcom\Parser\Individual\Probate::class,
        'WILL' => \Tatikoma\Gedcom\Parser\Individual\Will::class,
        'EVEN' => \Tatikoma\Gedcom\Parser\Common\Event::class,
        'CAST' => \Tatikoma\Gedcom\Parser\Individual\Caste::class,
        'DSCR' => \Tatikoma\Gedcom\Parser\Individual\PhyDescription::class,
        'EDUC' => \Tatikoma\Gedcom\Parser\Individual\Education::class,
        'IDNO' => \Tatikoma\Gedcom\Parser\Individual\IdentityNumber::class,
        'NATI' => \Tatikoma\Gedcom\Parser\Individual\Nationality::class,
        'NCHI' => \Tatikoma\Gedcom\Parser\Common\ChildrenCount::class,
        'NMR' => \Tatikoma\Gedcom\Parser\Individual\MarriageCount::class,
        'OCCU' => \Tatikoma\Gedcom\Parser\Individual\Occupation::class,
        'PROP' => \Tatikoma\Gedcom\Parser\Individual\Property::class,
        'RELI' => \Tatikoma\Gedcom\Parser\Individual\Religion::class,
        'RESI' => \Tatikoma\Gedcom\Parser\Individual\Residence::class,
        'SSN' => \Tatikoma\Gedcom\Parser\Individual\SocialSecurityNumber::class,
        'TITL' => \Tatikoma\Gedcom\Parser\Common\Title::class,
        '_UID' => \Tatikoma\Gedcom\Parser\Common\UID::class,

        // GenoPro
        'CONTACTS' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Contacts::class,
        'POSITION' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Position::class,
        'ISDEAD' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\IsDead::class,
        'PICTURES' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Pictures::class,
        'SOURCES' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Sources::class,
        'OCCUPATIONS' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Occupations::class,
        'FAMILIES' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Families::class,
        'EDUCATIONS' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Educations::class,
        'ORDEN' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Orden::class,
        'MEDAL' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Medal::class,
        'CHILDREN' => \Tatikoma\Gedcom\Parser\GenoPro\Individual\Children::class,
        'DISPLAY' => \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display::class,
    ];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Name[] A word or combination of words used to help identify an individual, title, or other item. More than one
     * NAME line should be used for people who were known by multiple names.
     */
    public $name = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Alias[] An indicator to link different record descriptions of a person who may be the same person.
     */
    public $alias = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Sex Indicates the sex of an individual--male or female.
     */
    public $sex;

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\RecordId A number assigned to a record by an originating automated system that can be used by a receiving
     * system to report results pertaining to that record.
     */
    public $recordId;

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Restriction A processing indicator signifying access to information has been denied or otherwise restricted.
     */
    public $restriction;

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\RecordFile A permanent number assigned to a record that uniquely identifies it within a known file.
     */
    public $recordFile;

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\AncestralFile A unique permanent record file number of an individual record stored in Ancestral File.
     */
    public $ancestralFile;

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Change Indicates a change, correction, or modification. Typically used in connection with a DATE to specify
     * when a change in information occurred.
     */
    public $change;

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\FamilySpouse[] Identifies the family in which an individual appears as a spouse.
     */
    public $familySpouse = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\FamilyChild[] Identifies the family in which an individual appears as a child.
     */
    public $familyChild = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Associates[] An indicator to link friends, neighbors, relatives, or associates of an individual.
     */
    public $associates = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\AncestorInterest[] Indicates an interest in additional research for ancestors of this individual.
     */
    public $ancestorInterest = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\DescendantInterest[] Indicates an interest in research to identify additional descendants of this individual.
     */
    public $descendantInterest = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Submitter[] An individual or organization who contributes genealogical data to a file or transfers it to someone else.
     */
    public $submitter = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Reference[] A description or number used to identify an item for filing, storage, or other reference purposes.
     */
    public $reference = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\BaptismLDS The event of baptism performed at age eight or later by priesthood authority of the LDS Church.
     */
    public $baptismLDS;

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\ConfirmationLDS The religious event by which a person receives membership in the LDS Church.
     */
    public $confirmationLDS;

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Endowment A religious event where an endowment ordinance for an individual was performed by priesthood authority in an LDS temple.
     */
    public $endowment;

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\SealingChild A religious event pertaining to the sealing of a child to his or her parents in an LDS temple ceremony.
     */
    public $sealingChild;

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\ObjectData[] Pertaining to a grouping of attributes used in describing something. Usually referring to the data
     * required to represent a multimedia object, such an audio recording, a photograph of a person, or an
     * image of a document.
     */
    public $objectData = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Note[] Additional information provided by the submitter for understanding the enclosing data.
     */
    public $note = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Source[] The initial or original material from which information was obtained.
     */
    public $source = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Adoption[] Pertaining to creation of a legally approved child-parent relationship that does not exist biologically.
     */
    public $adoption = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Birthdate[] The event of entering into life.
     */
    public $birthdate = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Baptism[] The event of baptism (not LDS), performed in infancy or later.
     */
    public $baptism = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\BarMitzvah[] The ceremonial event held when a Jewish boy reaches age 13.
     */
    public $barMitzvah = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\BasMitzvah[] The ceremonial event held when a Jewish girl reaches age 13, also known as "Bat Mitzvah."
     */
    public $basMitzvah = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Blessing[] A religious event of bestowing divine care or intercession. Sometimes given in connection with a
     * naming ceremony.
     */
    public $blessing = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Burial[] The event of the proper disposing of the mortal remains of a deceased person.
     */
    public $burial = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Census[] The event of the periodic count of the population for a designated locality, such as a national or state
     * Census.
     */
    public $census = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Christening[] The religious event (not LDS) of baptizing and/or naming a child.
     */
    public $christening = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\AdultChristening[] An indicator of the character set used in writing this automated information.
     */
    public $adultChristening = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Confirmation[] The religious event (not LDS) of conferring the gift of the Holy Ghost and, among protestants, full
     * church membership.
     */
    public $confirmation = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Cremation[] Disposal of the remains of a person's body by fire.
     */
    public $cremation = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Death[] The event when mortal life terminates.
     */
    public $death = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Emigration[] An event of leaving one's homeland with the intent of residing elsewhere.
     */
    public $emigration = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\FirstCommunion[] A religious rite, the first act of sharing in the Lord's supper as part of church worship.
     */
    public $firstCommunion = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Graduation[] An event of awarding educational diplomas or degrees to individuals.
     */
    public $graduation = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Immigration[] An event of entering into a new locality with the intent of residing there.
     */
    public $immigration = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Naturalization[] The event of obtaining citizenship.
     */
    public $naturalization = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Ordination[] A religious event of receiving authority to act in religious matters.
     */
    public $ordination = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Retirement[] An event of exiting an occupational relationship with an employer after a qualifying time period.
     */
    public $retirement = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Probate[] An event of judicial determination of the validity of a will. May indicate several related court activities
     * over several dates.
     */
    public $probate = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Will[] A legal document treated as an event, by which a person disposes of his or her estate, to take effect
     * after death. The event date is the date the will was signed while the person was alive.
     */
    public $will = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Event[] Pertaining to a noteworthy happening related to an individual, a group, or an organization. An EVENt
     * structure is usually qualified or classified by a subordinate use of the TYPE tag.
     */
    public $event = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Caste[]  The name of an individual's rank or status in society which is sometimes based on racial or religious
     * differences, or differences in wealth, inherited rank, profession, occupation, etc.
     */
    public $caste = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\PhyDescription[] The physical characteristics of a person, place, or thing.
     */
    public $phyDescription = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Education[] Indicator of a level of education attained.
     */
    public $education = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\IdentityNumber[] A number assigned to identify a person within some significant external system.
     */
    public $identityNumber = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Nationality[] The national heritage of an individual.
     */
    public $nationally = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\ChildrenCount[] The number of children that this person is known to be the parent of (all marriages) when subordinate
     * to an individual, or that belong to this family when subordinate to a FAM_RECORD.
     */
    public $childrenCount = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\MarriageCount[] The number of times this person has participated in a family as a spouse or parent.
     */
    public $marriageCount = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Occupation[] The type of work or profession of an individual.
     */
    public $occupation = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Property[] Pertaining to possessions such as real estate or other property of interest.
     */
    public $property = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Religion[] A religious denomination to which a person is affiliated or for which a record applies.
     */
    public $religion = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\Residence[] An address or place of residence that a family or individual resided.
     */
    public $residence = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Individual\SocialSecurityNumber[] A number assigned by the United States Social Security Administration. Used for tax identification
     * purposes.
     */
    public $socialSecurityNumber = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\Title[] A description of a specific writing or other work, such as the title of a book when used in a source
     * context, or a formal designation used by an individual in connection with positions of royalty or other
     * social status, such as Grand Duke.
     */
    public $title = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\Common\UID Generic UID (found in MyHeritage export)
     */
    public $uID;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Contacts
     */
    public $contacts;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GenoMap\Position
     */
    public $position;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\IsDead
     */
    public $isDead;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Pictures[]
     */
    public $pictures = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Sources[]
     */
    public $sources = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Occupations[]
     */
    public $occupations = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Families[]
     */
    public $families = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Educations[]
     */
    public $educations = [];

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Orden
     */
    public $orden;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Medal
     */
    public $medal;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\Individual\Children
     */
    public $children;

    /**
     * @var \Tatikoma\Gedcom\Parser\GenoPro\GlobalData\Display
     */
    public $display;
}