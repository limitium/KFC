<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PicklistController extends Controller
{
    /**
     * @Rest\View(serializerGroups={"Default"})
     * @Rest\QueryParam(name="type", nullable=false)
     * @param ParamFetcher $params
     * @return string
     */
    public function getPicklistAction(ParamFetcher $params)
    {
        $type = $params->get('type', '');
        return $this->get('app.picklistservice')->getListByType($type);
    }
}
