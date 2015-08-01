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
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @Service("stein.location")
 */
class LocationService
{
    protected $em;

    private $ls;


    /**
     * @InjectParams({
     *     "em" = @Inject("doctrine.orm.entity_manager"),
     *     "ls" = @Inject("stein.list_service")
     * })
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em, ListService $ls)
    {
        $this->em = $em;
        $this->ls = $ls;
    }

    public function findOneCity($id)
    {
        $result = $this->em->find('AppBundle:SpkCity', $id);
        return $this->ls->transformToListItem($result, 'cityRus', 'spkCityid');
    }

    public function findCitiesByNameContaining($namePart)
    {
        $result = $this->nameSearchFor('AppBundle:SpkCity', 'cityRus', $namePart);
        return $this->ls->transformToList($result, 'cityRus', 'spkCityid');
    }

    public function findRegionsByNameContaining($namePart)
    {
        return $this->nameSearchFor('AppBundle:KfOblast', 'oblastRus', $namePart);
    }

    public function findDistrictsByNameContaining($namePart)
    {
        return $this->nameSearchFor('AppBundle:SpkDistrict', 'districtRus', $namePart);
    }

    public function findHighwaysByNameContaining($namePart)
    {
        return $this->nameSearchFor('AppBundle:SpkHighway', 'highwayRus', $namePart);
    }

    public function findSubways($params)
    {
        $namePart = $params->get('name', '');
        $city = $params->get('city', '');
        $maxResults = 100;
        $queryBuilder = $this->em->getRepository('AppBundle:SpkMetro')->createQueryBuilder('m')->where('1=1');
        if (!empty($namePart)) {
            $queryBuilder->andWhere('m.metroRus LIKE :name');
            $queryBuilder->setParameter('name', '%' . $namePart . '%');
        }
        if (!empty($city)) {
            $queryBuilder->andWhere('m.spkCityid = :city');
            $queryBuilder->setParameter('city', $city);
        }
        return $queryBuilder->setMaxResults($maxResults)
            ->distinct()
            ->getQuery()
            ->useResultCache(true, 100500)
            ->getResult();
    }

    public function findStreets($params)
    {
        $namePart = $params->get('name', '');
        $city = $params->get('city', '');
        $maxResults = 100;
        $queryBuilder = $this->em->getRepository('AppBundle:SpkStreet')->createQueryBuilder('s')->where('1=1');
        if (!empty($namePart)) {
            $queryBuilder->andWhere('s.streetNameRus LIKE :name');
            $queryBuilder->setParameter('name', '%' . $namePart . '%');
        }
        if (!empty($city)) {
            $queryBuilder->andWhere('s.spkCityid = :city');
            $queryBuilder->setParameter('city', $city);
        }
        return $queryBuilder->setMaxResults($maxResults)
            ->distinct()
            ->getQuery()
            ->useResultCache(true, 100500)
            ->getResult();
    }

    private function nameSearchFor($entity, $columnName, $namePart)
    {
        $maxResults = 100;
        $result = $this->em
            ->getRepository($entity)->createQueryBuilder('e')
            ->where('e.'.$columnName.' LIKE :name')
            ->setParameter('name', '%' . $namePart . '%')
            ->setMaxResults($maxResults)
            ->distinct()
            ->getQuery()
            ->useResultCache(true, 100500)
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

    /**
     * @return ListService
     */
    public function getLs()
    {
        return $this->ls;
    }

    /**
     * @param ListService $ls
     */
    public function setLs($ls)
    {
        $this->ls = $ls;
    }





}