<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {
//        $conn = $this->get('database_connection');
//        $users = $conn->fetchAll('SELECT * FROM SPK_INVESTMENT');
//        var_dump($users);
//
//        $em = $this->getDoctrine()->getManager();
//        $offers = $em
//            ->getRepository('AppBundle:Investment')
//            ->findAll();
//        var_dump($offers);

        return $this->render('default/index.html.twig');
    }
}
