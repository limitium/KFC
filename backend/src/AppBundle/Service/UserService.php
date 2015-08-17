<?php


namespace AppBundle\Service;


use AppBundle\Entity\SpkCity;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;

use FOS\RestBundle\Request\ParamFetcher;
use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;
use JMS\DiExtraBundle\Annotation\Service;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @Service("stein.userservice")
 */
class UserService
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

    public function findUsersByCriteria(ParamFetcher $params)
    {
        $namePart = $params->get('name', '');
        $maxResults = 100;
        $result = $this->em
            ->getRepository('AppBundle:Userinfo')->createQueryBuilder('ui')
            ->where('ui.username LIKE :name')
            ->orderBy('ui.username')
            ->setParameter('name', '%' . $namePart . '%')
            ->setMaxResults($maxResults)
            ->distinct()
            ->getQuery()
            ->useResultCache(true, 100500)
            ->getResult();
        return $result;
    }

}