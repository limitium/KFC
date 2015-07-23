<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppBlocks
 *
 * @ORM\Table(name="SPK_OPP_BLOCKS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OPP_BLOCKS_PRIMARY", columns={"SPK_OPP_BLOCKSID"})}, indexes={@ORM\Index(name="SPK_OPP_BLOCKS_OPPORTUNITYID", columns={"OPPORTUNITYID"}), @ORM\Index(name="_dta_index_SPK_OPP_BLOCKS_7_777769828__K7_K2", columns={"SPK_PROPERTYID", "OPPORTUNITYID"}), @ORM\Index(name="_dta_index_SPK_OPP_BLOCKS_7_777769828__K7", columns={"SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_OPP_BLOCKS_5_777769828__K2_K7_8", columns={"OPPORTUNITYID", "SPK_PROPERTYID", "INCLUDE"}), @ORM\Index(name="_dta_index_SPK_OPP_BLOCKS_5_777769828__K7_K2_8", columns={"SPK_PROPERTYID", "OPPORTUNITYID", "INCLUDE"})})
 * @ORM\Entity
 */
class SpkOppBlocks
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_OPP_BLOCKSID", type="string", length=12, nullable=false)
     */
    private $spkOppBlocksid;

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
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=true)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="INCLUDE", type="string", length=1, nullable=true)
     */
    private $include;


}
