<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkPropertyLogBack
 *
 */
class SpkPropertyLogBack
{
    /**
     * @var string
     *
     */
    private $spkPropertyLogid;

    /**
     * @var string
     *
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     */
    private $createdate;

    /**
     * @var string
     *
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     */
    private $modifydate;

    /**
     * @var string
     *
     */
    private $changedField;

    /**
     * @var string
     *
     */
    private $oldValue;

    /**
     * @var string
     *
     */
    private $newValue;

    /**
     * @var string
     *
     */
    private $comments;



    /**
     * Set spkPropertyLogid
     *
     * @param string $spkPropertyLogid
     * @return SpkPropertyLogBack
     */
    public function setSpkPropertyLogid($spkPropertyLogid)
    {
        $this->spkPropertyLogid = $spkPropertyLogid;

        return $this;
    }

    /**
     * Get spkPropertyLogid
     *
     * @return string 
     */
    public function getSpkPropertyLogid()
    {
        return $this->spkPropertyLogid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkPropertyLogBack
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
     * @return SpkPropertyLogBack
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
     * @return SpkPropertyLogBack
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
     * @return SpkPropertyLogBack
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
     * @return SpkPropertyLogBack
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
     * Set changedField
     *
     * @param string $changedField
     * @return SpkPropertyLogBack
     */
    public function setChangedField($changedField)
    {
        $this->changedField = $changedField;

        return $this;
    }

    /**
     * Get changedField
     *
     * @return string 
     */
    public function getChangedField()
    {
        return $this->changedField;
    }

    /**
     * Set oldValue
     *
     * @param string $oldValue
     * @return SpkPropertyLogBack
     */
    public function setOldValue($oldValue)
    {
        $this->oldValue = $oldValue;

        return $this;
    }

    /**
     * Get oldValue
     *
     * @return string 
     */
    public function getOldValue()
    {
        return $this->oldValue;
    }

    /**
     * Set newValue
     *
     * @param string $newValue
     * @return SpkPropertyLogBack
     */
    public function setNewValue($newValue)
    {
        $this->newValue = $newValue;

        return $this;
    }

    /**
     * Get newValue
     *
     * @return string 
     */
    public function getNewValue()
    {
        return $this->newValue;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return SpkPropertyLogBack
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }
}
