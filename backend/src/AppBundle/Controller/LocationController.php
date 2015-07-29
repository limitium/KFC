<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/29/2015
 * Time: 8:53 PM
 */

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\DiExtraBundle\Annotation as DI;


class LocationController extends Controller
{

    /**
     * @DI\Inject("stein.location")
     * @var LocationService
     */
    private $ls;

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @Rest\QueryParam(name="name", nullable=false)
     * @param ParamFetcher $params
     * @return string
     */
    public function getCitiesAction(ParamFetcher $params)
    {
        $namePart = $params->get('name', '');
        return $this->ls->findCitiesByNameContaining($namePart);
    }


}