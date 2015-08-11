<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfHelper
 *
 * @ORM\Table(name="KF_Helper")
 * @ORM\Entity
 */
class KfHelper
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_Helperid", type="string", length=12, nullable=true)
     */
    private $kfHelperid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdate", type="date", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="createuser", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifydate", type="date", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="modifyuser", type="string", length=12, nullable=true)
     */
    private $modifyuser;



    /**
     * Set kfHelperid
     *
     * @param string $kfHelperid
     * @return KfHelper
     */
    public function setKfHelperid($kfHelperid)
    {
        $this->kfHelperid = $kfHelperid;

        return $this;
    }

    /**
     * Get kfHelperid
     *
     * @return string 
     */
    public function getKfHelperid()
    {
        return $this->kfHelperid;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfHelper
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
     * @return KfHelper
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
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return KfHelper
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
     * @return KfHelper
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
}
