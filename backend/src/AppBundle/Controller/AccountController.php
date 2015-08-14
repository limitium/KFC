<?php

namespace AppBundle\Controller;

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
    public function getAccountsAction(ParamFetcher $params)
    {
        $namePart = $params->get('name', '');
        return $this->as->findAccountsByNameContaining($namePart);
    }
}