<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactLeadsource
 *
 * @ORM\Table(name="CONTACT_LEADSOURCE", uniqueConstraints={@ORM\UniqueConstraint(name="XPKCONTACT_LEADSOURCE", columns={"CONTACTID", "LEADSOURCEID"})}, indexes={@ORM\Index(name="XIE1CONTACT_LEADSOURCE", columns={"CONTACTID"}), @ORM\Index(name="_dta_index_CONTACT_LEADSOURCE_7_245575913__K2", columns={"LEADSOURCEID"}), @ORM\Index(name="_dta_index_CONTACT_LEADSOURCE_7_245575913__K2_K1", columns={"LEADSOURCEID", "CONTACTID"})})
 * @ORM\Entity
 */
class ContactLeadsource
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=false)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="LEADSOURCEID", type="string", length=12, nullable=false)
     */
    private $leadsourceid;

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

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LEADDATE", type="datetime", nullable=true)
     */
    private $leaddate;

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


}
