<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/29/2015
 * Time: 8:57 PM
 */

namespace AppBundle\Service;

use AppBundle\Entity\SpkCity;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;

use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;
use JMS\DiExtraBundle\Annotation\Service;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @Service("stein.location")
 */
class LocationService extends NameSearchService
{
    const CITY_MOSCOW_ID = "Q6UJ9A004W3L";


    protected $em;

    /**
     * @DI\Inject("stein.list_service")
     * @var ListService
     */
    public $ls;


    /**
     * @InjectParams({
     *     "em" = @Inject("doctrine.orm.entity_manager"),
     * })
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function findOneCity($id)
    {
        $result = $this->em->find('AppBundle:SpkCity', $id);
        return $this->ls->transformToListItem($result, 'cityRus', 'spkCityid');
    }

    public function findCitiesByNameContaining($namePart)
    {
        if (!empty($namePart)) {
            $result = $this->nameSearchFor('AppBundle:SpkCity', 'cityRus', $namePart);
        } else {
            $result = $this->findAll('AppBundle:SpkCity', 'cityRus');
        }
        $result = $this->moveMoscowToFirstPosition($result);
        return $this->ls->transformToList($result, 'cityRus', 'spkCityid');
    }

    public function findRegionsByNameContaining($namePart)
    {
        $result = $this->nameSearchFor('AppBundle:KfOblast', 'oblastRus', $namePart);
        return $this->ls->transformToList($result, 'oblastRus', 'kfOblastid');
    }

    public function findDistricts($params)
    {
        $namePart = $params->get('name', '');
        $city = $params->get('city', '');
        $maxResults = 100;
        $queryBuilder = $this->em->getRepository('AppBundle:SpkDistrict')->createQueryBuilder('m')->where('1=1');
        if (!empty($namePart)) {
            $queryBuilder->andWhere('m.districtRus LIKE :name');
            $queryBuilder->setParameter('name', '%' . $namePart . '%');
        }
        if (!empty($city)) {
            $queryBuilder->andWhere('m.spkCityid = :city');
            $queryBuilder->setParameter('city', $city);
        }
        $result = $queryBuilder->setMaxResults($maxResults)
            ->distinct()
            ->getQuery()
            ->useResultCache(true, 100500)
            ->getResult();
        return $this->ls->transformToList($result, 'districtRus', 'spkDistrictid');
    }

    public function findHighwaysByNameContaining($namePart)
    {
        $result = $this->nameSearchFor('AppBundle:SpkHighway', 'highwayRus', $namePart);
        return $this->ls->transformToList($result, 'highwayRus', 'spkHighwayid');
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
        $result = $queryBuilder->setMaxResults($maxResults)
            ->distinct()
            ->getQuery()
            ->useResultCache(true, 100500)
            ->getResult();
        return $this->ls->transformToList($result, 'metroRus', 'spkMetroid');
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
        $result = $queryBuilder->setMaxResults($maxResults)
            ->distinct()
            ->getQuery()
            ->useResultCache(true, 100500)
            ->getResult();
        return $this->ls->transformToList($result, 'streetNameRus', 'spkStreetid');
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

    private function moveMoscowToFirstPosition($cities)
    {
        for ($i = 0; $i < sizeof($cities); $i++) {
            /** @var SpkCity $city */
            $city = $cities[$i];
            if ($city->getSpkCityid() == LocationService::CITY_MOSCOW_ID) {
                $cities = $this->moveElement($cities, $i, 0);
                break;
            }
        }
        return $cities;
    }

    private function moveElement($array, $from, $to) {
        $out = array_splice($array, $from, 1);
        array_splice($array, $to, 0, $out);
        return $array;
    }
}