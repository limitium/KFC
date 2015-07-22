<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Investment
 */
class Investment
{
    /**
     * @var string
     */
    private $NAME_RUS;


    /**
     * Set NAME_RUS
     *
     * @param string $nAMERUS
     * @return Investment
     */
    public function setNAMERUS($nAMERUS)
    {
        $this->NAME_RUS = $nAMERUS;

        return $this;
    }

    /**
     * Get NAME_RUS
     *
     * @return string 
     */
    public function getNAMERUS()
    {
        return $this->NAME_RUS;
    }
    /**
     * @var string
     */
    private $SPK_PROPERTYID;


    /**
     * Set SPK_PROPERTYID
     *
     * @param string $sPKPROPERTYID
     * @return Investment
     */
    public function setSPKPROPERTYID($sPKPROPERTYID)
    {
        $this->SPK_PROPERTYID = $sPKPROPERTYID;

        return $this;
    }

    /**
     * Get SPK_PROPERTYID
     *
     * @return string 
     */
    public function getSPKPROPERTYID()
    {
        return $this->SPK_PROPERTYID;
    }
}
