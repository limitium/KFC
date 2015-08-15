<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Account;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\DiExtraBundle\Annotation as DI;

class AccountController extends Controller
{
    /**
     * @DI\Inject("stein.account")
     * @var AccountService
     */
    private $as;


    /**
     * @Rest\View(serializerGroups={"Default"})
     * @Rest\QueryParam(name="name", nullable=false)
     * @param ParamFetcher $params
     * @return string
     */
    public function getAccountsListAction(ParamFetcher $params)
    {
        $namePart = $params->get('name', '');
        return $this->as->findAccountsByNameContaining($namePart);
    }

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @Rest\QueryParam(name="name", nullable=false)
     * @param ParamFetcher $params
     * @return string
     */
    public function getAccountsSearchAction(ParamFetcher $params)
    {
        $namePart = $params->get('name', '');
        return $this->getDoctrine()->getManager()
            ->getRepository('AppBundle:Account')->createQueryBuilder('e')
            ->where('e.account LIKE :name')
            ->setParameter('name', '%' . $namePart . '%')
            ->setMaxResults(100)
            ->getQuery()
            ->useResultCache(true, 100500)
            ->getResult();
    }

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @param Account $account
     * @return Account
     */
    public function getAccountAction(Account $account)
    {
        return $account;
    }
}