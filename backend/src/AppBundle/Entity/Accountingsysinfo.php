<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accountingsysinfo
 *
 * @ORM\Table(name="ACCOUNTINGSYSINFO", uniqueConstraints={@ORM\UniqueConstraint(name="XPKACCOUNTINGSYSINFO", columns={"ACCOUNTINGSYSINFOID"})})
 * @ORM\Entity
 */
class Accountingsysinfo
{
    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTINGSYSINFOID", type="string", length=12, nullable=false)
     */
    private $accountingsysinfoid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTCOMPANY", type="string", length=60, nullable=true)
     */
    private $accountcompany;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENTACCOUNTINGPERIOD", type="string", length=6, nullable=true)
     */
    private $currentaccountingperiod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LASTEXTRACTDATE", type="datetime", nullable=true)
     */
    private $lastextractdate;

    /**
     * @var string
     *
     * @ORM\Column(name="TRANSPORTPASSWORD", type="string", length=32, nullable=true)
     */
    private $transportpassword;

    /**
     * @var string
     *
     * @ORM\Column(name="TRANSPORTNAME", type="string", length=64, nullable=true)
     */
    private $transportname;

    /**
     * @var string
     *
     * @ORM\Column(name="TRANSPORTSHORTNAME", type="string", length=32, nullable=true)
     */
    private $transportshortname;

    /**
     * @var string
     *
     * @ORM\Column(name="TRANSPORTCOMPONENT", type="string", length=32, nullable=true)
     */
    private $transportcomponent;

    /**
     * @var string
     *
     * @ORM\Column(name="TRANSPORTDATABASE", type="string", length=32, nullable=true)
     */
    private $transportdatabase;

    /**
     * @var string
     *
     * @ORM\Column(name="TRANSPORTUSERNAME", type="string", length=32, nullable=true)
     */
    private $transportusername;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRODUCTDATAFEED", type="integer", nullable=true)
     */
    private $productdatafeed;

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



    /**
     * Set accountingsysinfoid
     *
     * @param string $accountingsysinfoid
     * @return Accountingsysinfo
     */
    public function setAccountingsysinfoid($accountingsysinfoid)
    {
        $this->accountingsysinfoid = $accountingsysinfoid;

        return $this;
    }

    /**
     * Get accountingsysinfoid
     *
     * @return string 
     */
    public function getAccountingsysinfoid()
    {
        return $this->accountingsysinfoid;
    }

    /**
     * Set accountcompany
     *
     * @param string $accountcompany
     * @return Accountingsysinfo
     */
    public function setAccountcompany($accountcompany)
    {
        $this->accountcompany = $accountcompany;

        return $this;
    }

    /**
     * Get accountcompany
     *
     * @return string 
     */
    public function getAccountcompany()
    {
        return $this->accountcompany;
    }

    /**
     * Set currentaccountingperiod
     *
     * @param string $currentaccountingperiod
     * @return Accountingsysinfo
     */
    public function setCurrentaccountingperiod($currentaccountingperiod)
    {
        $this->currentaccountingperiod = $currentaccountingperiod;

        return $this;
    }

    /**
     * Get currentaccountingperiod
     *
     * @return string 
     */
    public function getCurrentaccountingperiod()
    {
        return $this->currentaccountingperiod;
    }

    /**
     * Set lastextractdate
     *
     * @param \DateTime $lastextractdate
     * @return Accountingsysinfo
     */
    public function setLastextractdate($lastextractdate)
    {
        $this->lastextractdate = $lastextractdate;

        return $this;
    }

    /**
     * Get lastextractdate
     *
     * @return \DateTime 
     */
    public function getLastextractdate()
    {
        return $this->lastextractdate;
    }

    /**
     * Set transportpassword
     *
     * @param string $transportpassword
     * @return Accountingsysinfo
     */
    public function setTransportpassword($transportpassword)
    {
        $this->transportpassword = $transportpassword;

        return $this;
    }

    /**
     * Get transportpassword
     *
     * @return string 
     */
    public function getTransportpassword()
    {
        return $this->transportpassword;
    }

    /**
     * Set transportname
     *
     * @param string $transportname
     * @return Accountingsysinfo
     */
    public function setTransportname($transportname)
    {
        $this->transportname = $transportname;

        return $this;
    }

    /**
     * Get transportname
     *
     * @return string 
     */
    public function getTransportname()
    {
        return $this->transportname;
    }

    /**
     * Set transportshortname
     *
     * @param string $transportshortname
     * @return Accountingsysinfo
     */
    public function setTransportshortname($transportshortname)
    {
        $this->transportshortname = $transportshortname;

        return $this;
    }

    /**
     * Get transportshortname
     *
     * @return string 
     */
    public function getTransportshortname()
    {
        return $this->transportshortname;
    }

    /**
     * Set transportcomponent
     *
     * @param string $transportcomponent
     * @return Accountingsysinfo
     */
    public function setTransportcomponent($transportcomponent)
    {
        $this->transportcomponent = $transportcomponent;

        return $this;
    }

    /**
     * Get transportcomponent
     *
     * @return string 
     */
    public function getTransportcomponent()
    {
        return $this->transportcomponent;
    }

    /**
     * Set transportdatabase
     *
     * @param string $transportdatabase
     * @return Accountingsysinfo
     */
    public function setTransportdatabase($transportdatabase)
    {
        $this->transportdatabase = $transportdatabase;

        return $this;
    }

    /**
     * Get transportdatabase
     *
     * @return string 
     */
    public function getTransportdatabase()
    {
        return $this->transportdatabase;
    }

    /**
     * Set transportusername
     *
     * @param string $transportusername
     * @return Accountingsysinfo
     */
    public function setTransportusername($transportusername)
    {
        $this->transportusername = $transportusername;

        return $this;
    }

    /**
     * Get transportusername
     *
     * @return string 
     */
    public function getTransportusername()
    {
        return $this->transportusername;
    }

    /**
     * Set productdatafeed
     *
     * @param integer $productdatafeed
     * @return Accountingsysinfo
     */
    public function setProductdatafeed($productdatafeed)
    {
        $this->productdatafeed = $productdatafeed;

        return $this;
    }

    /**
     * Get productdatafeed
     *
     * @return integer 
     */
    public function getProductdatafeed()
    {
        return $this->productdatafeed;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return Accountingsysinfo
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
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return Accountingsysinfo
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
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return Accountingsysinfo
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
     * Set createuser
     *
     * @param string $createuser
     * @return Accountingsysinfo
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
}
