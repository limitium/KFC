<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfExpectedResponse
 *
 * @ORM\Table(name="KF_EXPECTED_RESPONSE", uniqueConstraints={@ORM\UniqueConstraint(name="KF_EXPECTED_RESPONSE_PRIMARY", columns={"KF_EXPECTED_RESPONSEID"})}, indexes={@ORM\Index(name="KF_EXPECTED_RESPONSE_CAMPAIGNID", columns={"CAMPAIGNID"})})
 * @ORM\Entity
 */
class KfExpectedResponse
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_EXPECTED_RESPONSEID", type="string", length=12, nullable=false)
     */
    private $kfExpectedResponseid;

    /**
     * @var string
     *
     * @ORM\Column(name="CAMPAIGNID", type="string", length=12, nullable=false)
     */
    private $campaignid;

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
     * @var integer
     *
     * @ORM\Column(name="MONTHID", type="smallint", nullable=true)
     */
    private $monthid;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTHNAMERUS", type="string", length=32, nullable=true)
     */
    private $monthnamerus;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTHNAMEENG", type="string", length=32, nullable=true)
     */
    private $monthnameeng;

    /**
     * @var integer
     *
     * @ORM\Column(name="EXPECTED_RESPONSE", type="integer", nullable=true)
     */
    private $expectedResponse;



    /**
     * Set kfExpectedResponseid
     *
     * @param string $kfExpectedResponseid
     * @return KfExpectedResponse
     */
    public function setKfExpectedResponseid($kfExpectedResponseid)
    {
        $this->kfExpectedResponseid = $kfExpectedResponseid;

        return $this;
    }

    /**
     * Get kfExpectedResponseid
     *
     * @return string 
     */
    public function getKfExpectedResponseid()
    {
        return $this->kfExpectedResponseid;
    }

    /**
     * Set campaignid
     *
     * @param string $campaignid
     * @return KfExpectedResponse
     */
    public function setCampaignid($campaignid)
    {
        $this->campaignid = $campaignid;

        return $this;
    }

    /**
     * Get campaignid
     *
     * @return string 
     */
    public function getCampaignid()
    {
        return $this->campaignid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfExpectedResponse
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
     * @return KfExpectedResponse
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
     * @return KfExpectedResponse
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
     * @return KfExpectedResponse
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
     * Set monthid
     *
     * @param integer $monthid
     * @return KfExpectedResponse
     */
    public function setMonthid($monthid)
    {
        $this->monthid = $monthid;

        return $this;
    }

    /**
     * Get monthid
     *
     * @return integer 
     */
    public function getMonthid()
    {
        return $this->monthid;
    }

    /**
     * Set monthnamerus
     *
     * @param string $monthnamerus
     * @return KfExpectedResponse
     */
    public function setMonthnamerus($monthnamerus)
    {
        $this->monthnamerus = $monthnamerus;

        return $this;
    }

    /**
     * Get monthnamerus
     *
     * @return string 
     */
    public function getMonthnamerus()
    {
        return $this->monthnamerus;
    }

    /**
     * Set monthnameeng
     *
     * @param string $monthnameeng
     * @return KfExpectedResponse
     */
    public function setMonthnameeng($monthnameeng)
    {
        $this->monthnameeng = $monthnameeng;

        return $this;
    }

    /**
     * Get monthnameeng
     *
     * @return string 
     */
    public function getMonthnameeng()
    {
        return $this->monthnameeng;
    }

    /**
     * Set expectedResponse
     *
     * @param integer $expectedResponse
     * @return KfExpectedResponse
     */
    public function setExpectedResponse($expectedResponse)
    {
        $this->expectedResponse = $expectedResponse;

        return $this;
    }

    /**
     * Get expectedResponse
     *
     * @return integer 
     */
    public function getExpectedResponse()
    {
        return $this->expectedResponse;
    }
}
