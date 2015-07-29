<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/29/2015
 * Time: 8:57 PM
 */

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;

use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;
use JMS\DiExtraBundle\Annotation\Service;

/**
 * @Service("stein.location")
 */
class LocationService
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

    public function findByNameContaining($namePart, $maxResults = 10)
    {
        $result = $this->em
            ->getRepository('AppBundle:SpkCity')->createQueryBuilder('c')
            ->where('c.cityRus LIKE :name')
            ->setParameter('name', '%'.$namePart.'%')
            ->setMaxRseults($maxResults)
            ->distinct()
            ->getQuery()
            ->getResult();
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