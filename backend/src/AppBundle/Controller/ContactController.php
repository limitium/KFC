<?php


namespace AppBundle\Controller;

use AppBundle\Entity\Contact;
use AppBundle\Service\ContactService;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\BrowserKit\Response;

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

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @param Contact $contact
     * @return Contact
     */
    public function getContactAction(Contact $contact)
    {
        return $contact;
    }

    /**
     * @Rest\View
     * @param Contact $contact
     * @param Request $request
     * @return View|Response
     */
    public function putContactAction(Contact $contact, Request $request)
    {
        return $contact;
    }

    /**
     * @Rest\View
     * @param Request $request
     * @return View|Response
     */
    public function postContactAction(Request $request)
    {
        $contact = new Contact();
//        $form = $this->createForm(new SpkInvestmentType(), $investment);
//        return $this->processForm($form, $request, $investment);

    }

}