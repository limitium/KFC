<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/5/2015
 * Time: 4:09 PM
 */

namespace AppBundle\Controller;

use AppBundle\Service\LocationService;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\HttpFoundation\JsonResponse;


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

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @Rest\QueryParam(name="name", nullable=false)
     * @Rest\QueryParam(name="accountid", nullable=false)
     * @param ParamFetcher $params
     * @return string
     */
    public function getContactsAction(ParamFetcher $params)
    {
        return $this->as->findContacts($params);
    }

}