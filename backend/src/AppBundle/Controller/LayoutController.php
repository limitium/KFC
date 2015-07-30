<?php

namespace AppBundle\Controller;


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
        $this->get("stein.pick_list")->getListByType("INVEST_LAND_LEASE_TERM");
        $this->get("stein.location")->findCitiesByNameContaining("моск");
    }
}