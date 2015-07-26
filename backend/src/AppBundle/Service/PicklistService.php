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
        $result = $this->em
            ->getRepository('AppBundle:Picklist')->createQueryBuilder('p')
            ->where('p.text LIKE :type')
            ->setParameter('type', $type)
            ->getQuery()
            ->getResult();
        return $result;
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