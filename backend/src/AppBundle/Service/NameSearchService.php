<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/5/2015
 * Time: 4:12 PM
 */

namespace AppBundle\Service;


use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;
use JMS\DiExtraBundle\Annotation\Service;
use JMS\DiExtraBundle\Annotation as DI;

abstract class NameSearchService
{

    protected $em;
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


    protected function nameSearchFor($entity, $columnName, $namePart)
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


}