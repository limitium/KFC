<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/5/2015
 * Time: 11:29 PM
 */

namespace AppBundle\Controller;

use AppBundle\Entity\SpkLandlords;
use AppBundle\Form\SpkLandlordsType;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class LandlordController extends Controller
{
    /**
     * @Rest\View
     * @param Request $request
     * @return View|Response
     */
    public function postLandlordAction(Request $request)
    {
        $landlord = new SpkLandlords();
        $form = $this->createForm(new SpkLandlordsType(), $landlord);
        return $this->processForm($form, $request, $landlord);
    }

    private function processForm(Form $form, Request $request, SpkLandlords $landlord)
    {

        $form->handleRequest($request);

        if ($form->isValid()) {

            $statusCode = $landlord->getSpkLandlordsid() ? 204 : 201;
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($landlord);
//            $em->flush();

            $response = new Response();
            $response->setStatusCode($statusCode);

            if ($statusCode == 201) {
                $response->headers->set('Location',
                    $this->generateUrl(
                        'get_landlord', array('landlord' => $landlord->getSpkLandlordsid()),
                        true // absolute
                    )
                );
            }

            return $response;
        }
        return View::create($form, 400);
    }


}