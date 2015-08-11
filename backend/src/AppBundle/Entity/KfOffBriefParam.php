<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOffBriefParam
 *
 * @ORM\Table(name="KF_OFF_BRIEF_PARAM", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OFF_BRIEF_PARAM_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_KF_OFF_BRIEF_PARAM_5_690817523__K1_7", columns={"SPK_PROPERTYID", "COMPLEX_NAME"})})
 * @ORM\Entity
 */
class KfOffBriefParam
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
     * @ORM\Column(name="BRIEF_PARAM", type="string", length=1024, nullable=true)
     */
    private $briefParam;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPLEX_NAME", type="string", length=256, nullable=true)
     */
    private $complexName;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfOffBriefParam
     */
    public function setSpkPropertyid($spkPropertyid)
    {
        $this->spkPropertyid = $spkPropertyid;

        return $this;
    }

    /**
     * Get spkPropertyid
     *
     * @return string 
     */
    public function getSpkPropertyid()
    {
        return $this->spkPropertyid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfOffBriefParam
     */
    public function setCreateuser($createuser)
    {
        $this->createuser = $createuser;

        return $this;
    }

    /**
     * Get createuser
     *
     * @return string 
     */
    public function getCreateuser()
    {
        return $this->createuser;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfOffBriefParam
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Get createdate
     *
     * @return \DateTime 
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return KfOffBriefParam
     */
    public function setModifyuser($modifyuser)
    {
        $this->modifyuser = $modifyuser;

        return $this;
    }

    /**
     * Get modifyuser
     *
     * @return string 
     */
    public function getModifyuser()
    {
        return $this->modifyuser;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return KfOffBriefParam
     */
    public function setModifydate($modifydate)
    {
        $this->modifydate = $modifydate;

        return $this;
    }

    /**
     * Get modifydate
     *
     * @return \DateTime 
     */
    public function getModifydate()
    {
        return $this->modifydate;
    }

    /**
     * Set briefParam
     *
     * @param string $briefParam
     * @return KfOffBriefParam
     */
    public function setBriefParam($briefParam)
    {
        $this->briefParam = $briefParam;

        return $this;
    }

    /**
     * Get briefParam
     *
     * @return string 
     */
    public function getBriefParam()
    {
        return $this->briefParam;
    }

    /**
     * Set complexName
     *
     * @param string $complexName
     * @return KfOffBriefParam
     */
    public function setComplexName($complexName)
    {
        $this->complexName = $complexName;

        return $this;
    }

    /**
     * Get complexName
     *
     * @return string 
     */
    public function getComplexName()
    {
        return $this->complexName;
    }
}
