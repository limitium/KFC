<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;

use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;
use JMS\DiExtraBundle\Annotation\Service;

/**
 * @Service("stein.pick_list")
 */
class PickListService
{
    protected $em;

    /**
     * @InjectParams({
     *     "em" = @Inject("doctrine.orm.entity_manager")
     * })
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
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
            ->useResultCache(true, 100500)
            ->getOneOrNullResult();
        return $result;
    }

    /**
     * @return EntityManager
     */
    public function getEm()
    {
        return $this->em;
    }

    /**
     * @param EntityManager $em
     */
    public function setEm($em)
    {
        $this->em = $em;
    }
}