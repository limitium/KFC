<?php


namespace AppBundle\Controller;

use AppBundle\Entity\Userinfo;
use AppBundle\Form\ContactType;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Contact;
use AppBundle\Service\ContactService;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
    public function getContactsMyAction(ParamFetcher $params)
    {
        return $this->contactService->findByCurrentUser($params);
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
    public function putContactsAction(Contact $contact, Request $request)
    {
        $form = $this->createForm(new ContactType(), $contact, ['method' => 'PUT']);
        return $this->processForm($form, $request, $contact);
    }

    /**
     * @Rest\View
     * @param Request $request
     * @return View|Response
     */
    public function postContactsAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(new ContactType(), $contact);
        return $this->processForm($form, $request, $contact);
    }

    private function processForm(Form $form, Request $request, Contact $contact)
    {

        $form->handleRequest($request);

        if ($form->isValid()) {
            $statusCode = $contact->getContactid() ? 204 : 201;
            $this->contactService->saveOrUpdate($contact);

            $response = new Response();
            $response->setStatusCode($statusCode);

            if ($statusCode == 201) {
                $response->headers->set('Location',
                    $this->generateUrl(
                        'get_contact', array('contact' => $contact->getContactid()),
                        true // absolute
                    )
                );
            }

            return $response;
        }

        return View::create($form, 400);
    }

}