<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOffSeo
 *
 * @ORM\Table(name="KF_OFF_SEO", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OFF_SEO_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class KfOffSeo
{
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
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="URL", type="string", length=1024, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="META_KEYWORDS", type="string", length=1024, nullable=true)
     */
    private $metaKeywords;

    /**
     * @var string
     *
     * @ORM\Column(name="META_DESCRIPTION", type="string", length=2048, nullable=true)
     */
    private $metaDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="TITLE", type="string", length=1024, nullable=true)
     */
    private $title;


}
