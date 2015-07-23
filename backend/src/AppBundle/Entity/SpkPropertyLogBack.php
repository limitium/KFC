<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkPropertyLogBack
 *
 * @ORM\Table(name="SPK_PROPERTY_LOG_back")
 * @ORM\Entity
 */
class SpkPropertyLogBack
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTY_LOGID", type="string", length=12, nullable=false)
     */
    private $spkPropertyLogid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

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
     * @ORM\Column(name="CHANGED_FIELD", type="string", length=32, nullable=true)
     */
    private $changedField;

    /**
     * @var string
     *
     * @ORM\Column(name="OLD_VALUE", type="string", length=64, nullable=true)
     */
    private $oldValue;

    /**
     * @var string
     *
     * @ORM\Column(name="NEW_VALUE", type="string", length=64, nullable=true)
     */
    private $newValue;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="string", length=128, nullable=true)
     */
    private $comments;


}
