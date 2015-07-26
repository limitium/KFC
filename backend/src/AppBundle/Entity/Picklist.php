<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Picklist
 *
 * @ORM\Table(name="PICKLIST", uniqueConstraints={
 * @ORM\UniqueConstraint(name="KF_SR_IX_ITEMID", columns={"ITEMID"}),
 * @ORM\UniqueConstraint(name="KF_SR_IX_ITEMID", columns={"ITEMID"}),
 * },
 * indexes={
 * @ORM\Index(name="KF_SR_IX_PICKLISTID", columns={"PICKLISTID", "TEXT", "SHORTTEXT"}),
 * @ORM\Index(name="KF_SR_IX_ID", columns={"ID"}),
 * @ORM\Index(name="_dta_index_PICKLIST_7_1323867783__K1_K2", columns={"ID", "TEXT"}),
 * @ORM\Index(name="_dta_index_PICKLIST_7_1323867783__K2_1", columns={"TEXT", "ID"}),
 * @ORM\Index(name="_dta_index_PICKLIST_c_7_1323867783__K2", columns={"TEXT"}),
 * @ORM\Index(name="_dta_index_PICKLIST_7_1323867783__K1_K5_2", columns={"ID", "PICKLISTID", "TEXT"}),
 * @ORM\Index(name="_dta_index_PICKLIST_7_1323867783__K5_2", columns={"PICKLISTID", "TEXT"}),
 * @ORM\Index(name="_dta_index_PICKLIST_7_1323867783__K5_K1_2", columns={"PICKLISTID", "ID", "TEXT"}),
 * @ORM\Index(name="_dta_index_PICKLIST_c_7_1323867783__K5", columns={"PICKLISTID"}),
 * @ORM\Index(name="_dta_index_PICKLIST_7_1323867783__K1_2_4", columns={"ID", "TEXT", "ITEMID"}),
 * @ORM\Index(name="_dta_index_PICKLIST_7_1323867783__K2_K1_4", columns={"TEXT", "ID", "ITEMID"}),
 * @ORM\Index(name="_dta_index_PICKLIST_5_1323867783__K2_4", columns={"TEXT", "ITEMID"}),
 * @ORM\Index(name="_dta_index_PICKLIST_5_1323867783__K1_K4_K2", columns={"ID", "ITEMID", "TEXT"}),
 * @ORM\Index(name="_dta_index_PICKLIST_5_1323867783__K2_K4_K1", columns={"TEXT", "ITEMID", "ID"}),
 * @ORM\Index(name="_dta_index_PICKLIST_5_1323867783__K1_K4", columns={"ID", "ITEMID"}),
 * @ORM\Index(name="_dta_index_PICKLIST_5_1323867783__K4_K2", columns={"ITEMID", "TEXT"}),
 * @ORM\Index(name="_dta_index_PICKLIST_5_1323867783__K4_K1_K2", columns={"ITEMID", "ID", "TEXT"}),
 * @ORM\Index(name="_dta_index_PICKLIST_5_1323867783__K4_K1", columns={"ITEMID", "ID"})})
 * @ORM\Entity
 */
class Picklist
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="TEXT", type="string", length=64, nullable=true)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="SHORTTEXT", type="string", length=64, nullable=true)
     */
    private $shorttext;

    /**
     * @var string
     * @ORM\Column(name="ITEMID", type="string", length=12, nullable=true)
     */
    private $itemid;

    /**
     * @var string
     *
     * @ORM\Column(name="PICKLISTID", type="string", length=12, nullable=true)
     */
    private $picklistid;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="DEFAULTINDEX", type="integer", nullable=true)
     */
    private $defaultindex;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;


}
