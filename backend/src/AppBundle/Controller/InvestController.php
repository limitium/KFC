<?php

namespace AppBundle\Controller;

use AppBundle\Entity\SpkInvestment;
use AppBundle\Form\SpkInvestmentDTO;
use AppBundle\Form\SpkInvestmentType;
use AppBundle\Form\TestDTO;
use AppBundle\Service\InvestmentService;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use JMS\DiExtraBundle\Annotation as DI;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class InvestController extends Controller
{

    /**
     * @DI\Inject("stein.investment_service")
     * @var InvestmentService
     */
    public $investmentService;


    /**
     * @Rest\View(serializerGroups={"Default"})
     */
    public function getInvestmentsAction()
    {
        $em = $this->getDoctrine()->getManager();

        return $em
            ->getRepository('AppBundle:SpkInvestment')
            ->findAll();
    }

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @param SpkInvestment $investment
     * @return SpkInvestment
     */
    public function getInvestmentAction(SpkInvestment $investment)
    {
        return $investment;
    }

    /**
     * @Rest\View
     * @param Request $request
     * @return View|Response
     */
    public function postInvestmentAction(Request $request)
    {
        $investment = new SpkInvestment();
        $form = $this->createForm(new SpkInvestmentType(), $investment);
        return $this->processForm($form, $request, $investment);
    }

    private function processForm(Form $form, Request $request, SpkInvestment $investment)
    {

        $form->handleRequest($request);

        if ($form->isValid()) {
            $statusCode = $investment->getId() ? 204 : 201;

            $em = $this->getDoctrine()->getManager();
            foreach($investment->getBlocks() as $block){
                $block->setInvestment($investment);
            }

            $em->persist($investment);
            $em->flush();

            $response = new Response();
            $response->setStatusCode($statusCode);

            if ($statusCode == 201) {
                $response->headers->set('Location',
                    $this->generateUrl(
                        'get_investment', array('investment' => $investment->getId()),
                        true // absolute
                    )
                );
            }

            return $response;
        }
        return View::create($form, 400);
    }
}