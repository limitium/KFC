<?php


namespace AppBundle\Controller;

use AppBundle\Service\ContactService;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\DiExtraBundle\Annotation as DI;

class ContactController extends Controller
{
    /**
     * @DI\Inject("stein.contact")
     * @var ContactService
     */
    private $contactService;

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @Rest\QueryParam(name="name", nullable=false)
     * @Rest\QueryParam(name="accountid", nullable=false)
     * @Rest\QueryParam(name="email", nullable=false)
     * @param ParamFetcher $params
     * @return string
     */
    public function getContactsSearchAction(ParamFetcher $params)
    {
        return $this->contactService->findByCriteria($params);
    }

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @Rest\QueryParam(name="name", nullable=false)
     * @Rest\QueryParam(name="accountid", nullable=false)
     * @Rest\QueryParam(name="email", nullable=false)
     * @param ParamFetcher $params
     * @return string
     */
    public function getContactsHintAction(ParamFetcher $params)
    {
        return $this->contactService->findByName($params);
    }

}