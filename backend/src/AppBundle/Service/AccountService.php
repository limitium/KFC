<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/5/2015
 * Time: 4:10 PM
 */

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;

use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;
use JMS\DiExtraBundle\Annotation\Service;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @Service("stein.account")
 */
class AccountService extends NameSearchService
{
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

    public function findAccountsByNameContaining($namePart)
    {
        $result = $this->nameSearchFor('AppBundle:SpkCity', 'cityRus', $namePart);
        return $this->ls->transformToList($result, 'cityRus', 'spkCityid');
    }

    public function findContactsByNameContaining($namePart)
    {
        $result = $this->nameSearchFor('AppBundle:SpkCity', 'cityRus', $namePart);
        return $this->ls->transformToList($result, 'cityRus', 'spkCityid');
    }



}