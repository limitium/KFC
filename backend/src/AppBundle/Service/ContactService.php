<?php


namespace AppBundle\Service;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;

use FOS\RestBundle\Request\ParamFetcher;
use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;
use JMS\DiExtraBundle\Annotation\Service;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @Service("stein.contact")
 */
class ContactService
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

    public function findByName(ParamFetcher $params)
    {
        $namePart = $params->get('name', '');
        $accountId = $params->get('accountid', '');
        $entity = 'AppBundle:ContactDetail';
        $lastRusNameColumn = 'lastrus';
        $firstRusNameColumn = 'firstrus';
        $middleRusNameColumn = 'middlerus';
        $maxResults = 100;
        $qb = $this->em->getRepository($entity)->createQueryBuilder('e');
        if (!empty($accountId)) {
            $qb->leftJoin('AppBundle:Contact', 'c', 'WITH', 'c.contactid = e.contactid');
        }
        $qb->where("1=1");
        if (!empty($accountId)) {
            $qb->andWhere("c.accountid= :accountid")->setParameter('accountid', $accountId);
        }
        if (!empty($namePart)) {
            $qb->andWhere(
                $qb->expr()->orX(
                    $qb->expr()->like('e.'.$lastRusNameColumn, ':name'),
                    $qb->expr()->like('e.'.$firstRusNameColumn, ':name'),
                    $qb->expr()->like('e.'.$middleRusNameColumn, ':name')
                #TODO: Add mobile phone querying
                ))->setParameter('name', '%' . $namePart . '%');
        }
        $contacts = $qb->setMaxResults($maxResults)
            ->distinct()
            ->getQuery()
            ->useResultCache(true, 100500)
            ->getResult();

        $result = array();
        foreach ($contacts as $contact) {
            $id = $contact->getContactid();
            $array = array($contact->getFirstrus(), $contact->getMiddlerus(), $contact->getLastrus());
            $name = implode(' ', array_filter($array));
            $result[] = new ListItemDTO($id, $name);
        }
        return $result;
    }

    public function findByCriteria(ParamFetcher $params)
    {
        $name = $params->get('name', '');
        $email = $params->get('email', '');
        $entity = 'AppBundle:Contact';

        $qb = $this->em->getRepository($entity)->createQueryBuilder('c');
        if (!empty($name)) {
            $qb->andWhere(
                $qb->expr()->orX(
                    $qb->expr()->like('c.lastrus', ':name'),
                    $qb->expr()->like('c.firstrus', ':name'),
                    $qb->expr()->like('c.contactDetail.firstrus', ':name'),
                    $qb->expr()->like('c.contactDetail.middlerus', ':name'),
                    $qb->expr()->like('c.contactDetail.lastrus', ':name'),
                    $qb->expr()->like('c.account', ':name')
                )
            )->setParameter('name', $name);
        }
        if (!empty($email)) {
            $qb->andWhere(
                $qb->expr()->orX(
                    $qb->expr()->like('c.email', ':email'),
                    $qb->expr()->like('c.secondaryEmail', ':email'),
                    $qb->expr()->like('c.email3', ':email')
                )
            )->setParameter('email', $email);
        }
        $contacts = $qb
            ->getQuery()
            ->useResultCache(true, 100500)
            ->getResult();
        return $contacts;
    }


}