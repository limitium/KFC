<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRotationContacts
 *
 * @ORM\Table(name="KF_ROTATION_CONTACTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_ROTATION_CONTACTS_PRIMARY", columns={"CONTACTID"})})
 * @ORM\Entity
 */
class KfRotationContacts
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
     * @ORM\Column(name="OLD_ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $oldAccountid;

    /**
     * @var string
     *
     * @ORM\Column(name="NEW_CONTACTID", type="string", length=12, nullable=true)
     */
    private $newContactid;

    /**
     * @var string
     *
     * @ORM\Column(name="NEW_ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $newAccountid;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;


}
