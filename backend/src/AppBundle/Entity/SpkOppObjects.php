<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppObjects
 *
 * @ORM\Table(name="SPK_OPP_OBJECTS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OPP_OBJECTS_PRIMARY", columns={"SPK_OPP_OBJECTSID"})}, indexes={@ORM\Index(name="SPK_OPP_OBJECTS_OPPORTUNITYID", columns={"OPPORTUNITYID"}), @ORM\Index(name="_dta_index_SPK_OPP_OBJECTS_5_1024722703__K7_K2_K9_K1", columns={"OBJECTID", "OPPORTUNITYID", "IN_LIST", "SPK_OPP_OBJECTSID"}), @ORM\Index(name="_dta_index_SPK_OPP_OBJECTS_5_1024722703__K2_K9_K7_K1", columns={"OPPORTUNITYID", "IN_LIST", "OBJECTID", "SPK_OPP_OBJECTSID"}), @ORM\Index(name="_dta_index_SPK_OPP_OBJECTS_5_1024722703__K1_K2_K9_K7", columns={"SPK_OPP_OBJECTSID", "OPPORTUNITYID", "IN_LIST", "OBJECTID"}), @ORM\Index(name="_dta_index_SPK_OPP_OBJECTS_5_1024722703__K2_K7_K9_K1", columns={"OPPORTUNITYID", "OBJECTID", "IN_LIST", "SPK_OPP_OBJECTSID"}), @ORM\Index(name="_dta_index_SPK_OPP_OBJECTS_c_5_1024722703__K2_K9_K7", columns={"OPPORTUNITYID", "IN_LIST", "OBJECTID"}), @ORM\Index(name="_dta_index_SPK_OPP_OBJECTS_c_5_1024722703__K7", columns={"OBJECTID"})})
 * @ORM\Entity
 */
class SpkOppObjects
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_OPP_OBJECTSID", type="string", length=12, nullable=false)
     */
    private $spkOppObjectsid;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=false)
     */
    private $opportunityid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="OBJECTID", type="string", length=12, nullable=true)
     */
    private $objectid;

    /**
     * @var string
     *
     * @ORM\Column(name="IN_REPORT", type="string", length=1, nullable=true)
     */
    private $inReport;

    /**
     * @var string
     *
     * @ORM\Column(name="IN_LIST", type="string", length=1, nullable=true)
     */
    private $inList;


}
