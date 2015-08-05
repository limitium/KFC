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
        $entity = 'AppBundle:Account';
        $nameColumn = 'account';
        $maxResults = 100;
        $accounts = $this->em
            ->getRepository($entity)->createQueryBuilder('e')
            ->where('e.'.$nameColumn.' LIKE :name')
            ->setParameter('name', '%' . $namePart . '%')
            ->setMaxResults($maxResults)
            ->getQuery()
            ->useResultCache(true, 100500)
            ->getResult();
        return $this->ls->transformToList($accounts, $nameColumn, 'accountid');
    }

    public function findContactsByNameContaining($namePart)
    {
        $entity = 'AppBundle:ContactDetail';
        $lastRusNameColumn = 'lastrus';
        $firstRusNameColumn = 'firstrus';
        $middleRusNameColumn = 'middlerus';
        $maxResults = 100;
        $contacts = $this->em
            ->getRepository($entity)->createQueryBuilder('e')
            ->where('e.'.$lastRusNameColumn.' LIKE :name')
            ->orWhere('e.'.$firstRusNameColumn.' LIKE :name')
            ->orWhere('e.'.$middleRusNameColumn.' LIKE :name')
            ->setParameter('name', '%' . $namePart . '%')
            ->setMaxResults($maxResults)
            ->distinct()
            ->getQuery()
            ->useResultCache(true, 100500)
            ->getResult();

        $result = array();
        foreach ($contacts as $contact) {
            $id = $contact->getContactid();
            $array = array($contact->getFirstrus(), $contact->getMiddlerus(), $contact->getLastrus());
            $name = implode(' ', array_filter($array));
            $result[] = new ListItem($id, $name);
        }
        return $result;

        return $this->ls->transformToList($result, 'cityRus', 'contactid');
    }



}