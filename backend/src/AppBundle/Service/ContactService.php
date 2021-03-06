<?php


namespace AppBundle\Service;


use AppBundle\Entity\Contact;
use AppBundle\Entity\Userinfo;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;

use FOS\RestBundle\Request\ParamFetcher;
use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;
use JMS\DiExtraBundle\Annotation\Service;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\Security\Core\SecurityContext;

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
     * @DI\Inject("security.context")
     * @var SecurityContext
     */
    public $securityContext;

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

    public function saveOrUpdate(Contact $contact)
    {
        $newManagersIds = array();
        /** @var Userinfo $manager */
        foreach($contact->getManagers() as $manager) {
            $newManagersIds[] = $manager->getUserid();
        }
        $newManagers = $this->em->getRepository('AppBundle:Userinfo')->findby( array('userid' => $newManagersIds), array('userid' => 'DESC'));
        $contact->setManagers($newManagers);
        $result = $this->em->merge($contact);
        $this->em->flush();
        return $result;
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
            $qb->join('c.contactDetail', 'cd');
            $qb->andWhere(
                $qb->expr()->orX(
                    $qb->expr()->like('c.firstname', ':name'),
                    $qb->expr()->like('c.lastname', ':name'),
                    $qb->expr()->like('c.middlename', ':name'),
                    $qb->expr()->like('cd.firstrus', ':name'),
                    $qb->expr()->like('cd.middlerus', ':name'),
                    $qb->expr()->like('cd.lastrus', ':name'),
                    $qb->expr()->like('c.accountName', ':name')
                )
            )->setParameter('name', $name);
        }
        if (!empty($email)) {
            $qb->andWhere(
                $qb->expr()->orX(
                    $qb->expr()->like('c.email', ':email'),
                    $qb->expr()->like('c.workphone', ':email'),
                    $qb->expr()->like('c.homephone', ':email'),
                    $qb->expr()->like('c.donotphone', ':email'),
                    $qb->expr()->like('c.otherphone', ':email'),
                    $qb->expr()->like('c.secondaryEmail', ':email'),
                    $qb->expr()->like('c.email3', ':email')
                )
            )->setParameter('email', $email);
        }
        $contacts = $qb
            ->getQuery()
//            ->useResultCache(true, 100500)
            ->getResult();
        return $contacts;
    }

    public function findByCurrentUser($params)
    {
//        $user = $this->securityContext->getToken()->getUser();
        $user = 'U6UJ9A00006S';
        if ($user == 'anon.') {
            return array();
        }

        $entity = 'AppBundle:Contact';
        $qb = $this->em->getRepository($entity)->createQueryBuilder('c');
        $qb->join('c.contactDetail', 'cd');
        $qb->andWhere(
            $qb->expr()->orX(
                $qb->expr()->like('cd.industrialmanagerid', ':user'),
                $qb->expr()->like('cd.residentialmanagerid', ':user'),
                $qb->expr()->like('cd.countrymanagerid', ':user'),
                $qb->expr()->like('cd.retailmanagerid', ':user'),
                $qb->expr()->like('cd.officemanagerid', ':user'),
                $qb->expr()->like('cd.valuationmanagerid', ':user'),
                $qb->expr()->like('cd.investmentmanagerid', ':user'),
                $qb->expr()->like('cd.consultingmanagerid', ':user'),
                $qb->expr()->like('cd.researchmanagerid', ':user'),
                $qb->expr()->like('cd.marketingmanagerid', ':user')
            )
        )->setParameter('user', $user);
        $contacts = $qb
            ->getQuery()
            ->getResult();
        return $contacts;
    }

}