<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOffBriefStat
 *
 * @ORM\Table(name="KF_OFF_BRIEF_STAT")
 * @ORM\Entity
 */
class KfOffBriefStat
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
     * @ORM\Column(name="BRIEF_RUS", type="text", length=16, nullable=false)
     */
    private $briefRus;

    /**
     * @var string
     *
     * @ORM\Column(name="BRIEF_ENG", type="text", length=16, nullable=false)
     */
    private $briefEng;

    /**
     * @var integer
     *
     * @ORM\Column(name="Chk_summ", type="integer", nullable=true)
     */
    private $chkSumm;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfOffBriefStat
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
     * Set briefRus
     *
     * @param string $briefRus
     * @return KfOffBriefStat
     */
    public function setBriefRus($briefRus)
    {
        $this->briefRus = $briefRus;

        return $this;
    }

    /**
     * Get briefRus
     *
     * @return string 
     */
    public function getBriefRus()
    {
        return $this->briefRus;
    }

    /**
     * Set briefEng
     *
     * @param string $briefEng
     * @return KfOffBriefStat
     */
    public function setBriefEng($briefEng)
    {
        $this->briefEng = $briefEng;

        return $this;
    }

    /**
     * Get briefEng
     *
     * @return string 
     */
    public function getBriefEng()
    {
        return $this->briefEng;
    }

    /**
     * Set chkSumm
     *
     * @param integer $chkSumm
     * @return KfOffBriefStat
     */
    public function setChkSumm($chkSumm)
    {
        $this->chkSumm = $chkSumm;

        return $this;
    }

    /**
     * Get chkSumm
     *
     * @return integer 
     */
    public function getChkSumm()
    {
        return $this->chkSumm;
    }
}
