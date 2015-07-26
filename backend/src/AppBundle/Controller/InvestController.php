<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use JMS\DiExtraBundle\Annotation as DI;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InvestController extends Controller
{
    /**
     * @DI\Inject("stein.db.id_generator")
     * @var IdGeneratorService
     */
    private $generator;

    /**
     * @Rest\View(serializerGroups={"Default"})
     */
    public function getInvestmentAction()
    {
        $em = $this->getDoctrine()->getManager();

        return $em
            ->getRepository('AppBundle:SpkInvestment')
            ->findAll();
    }
}