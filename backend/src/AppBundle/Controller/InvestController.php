<?php

namespace AppBundle\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcher;


use FOS\RestBundle\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Form;


class InvestController extends Controller{
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