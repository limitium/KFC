<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/26/2015
 * Time: 1:18 PM
 */

namespace AppBundle\Service;

use Doctrine\ORM\Query\ResultSetMapping;


class PicklistService
{
    protected $em;

    public function __construct(\Doctrine\ORM\EntityManager $em)
    {
        $this->em = $em;
    }

    public function getListByType($type)
    {
        $rsm = new ResultSetMapping();
        $rsm->addScalarResult('picklistid', 'picklistid');
        $rsm->addScalarResult('picklistname', 'picklistname');
        $rsm->addScalarResult('shorttext', 'shorttext');
        $rsm->addScalarResult('text', 'text');
        $rsm->addScalarResult('shorttext', 'shorttext');
        $nativeQuery = "select pp.itemid picklistid,
                pp.text picklistname,
                pc.text,
                pc.shorttext,
                pc.itemid
                from picklist pp
                left join picklist pc on pp.itemid = pc.picklistid
                where pp.picklistid = 'PICKLISTLIST'";
        if ($type) {
            $nativeQuery .= " and pp.text like ?";
            return $this->getEm()->createNativeQuery($nativeQuery, $rsm)->setParameter(1, $type)->getResult();
        } else {
            return $this->getEm()->createNativeQuery($nativeQuery, $rsm)->getResult();
        }
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    public function getEm()
    {
        return $this->em;
    }

    /**
     * @param \Doctrine\ORM\EntityManager $em
     */
    public function setEm($em)
    {
        $this->em = $em;
    }
}