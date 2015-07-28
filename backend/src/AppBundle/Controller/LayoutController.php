<?php

namespace AppBundle\Controller;


use AppBundle\Service\IdGeneratorService;
use FOS\RestBundle\Controller\Annotations as Rest;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class LayoutController extends Controller
{
    /**
     *
     * @Template()
     */
    public function indexAction()
    {
        $user = $this->getUser();
        die;
    }
}