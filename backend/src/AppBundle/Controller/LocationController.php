<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/29/2015
 * Time: 8:53 PM
 */

namespace AppBundle\Controller;

use AppBundle\Service\LocationService;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\HttpFoundation\JsonResponse;


class LocationController extends Controller
{

    /**
     * @DI\Inject("stein.location")
     * @var LocationService
     */
    private $ls;

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @return string
     */
    public function getCityAction($id)
    {
        return $this->ls->findOneCity($id);
    }

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

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @Rest\QueryParam(name="name", nullable=false)
     * @param ParamFetcher $params
     * @return string
     */
    public function getRegionsAction(ParamFetcher $params)
    {
        $namePart = $params->get('name', '');
        return $this->ls->findRegionsByNameContaining($namePart);
    }

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @Rest\QueryParam(name="name", nullable=false, allowBlank=true)
     * @Rest\QueryParam(name="cities", array=true)
     * @param ParamFetcher $params
     * @return string
     */
    public function getDistrictsAction(ParamFetcher $params)
    {
        return $this->ls->findDistricts($params);
    }

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @Rest\QueryParam(name="name", nullable=false)
     * @param ParamFetcher $params
     * @return string
     */
    public function getHighwaysAction(ParamFetcher $params)
    {
        $namePart = $params->get('name', '');
        return $this->ls->findHighwaysByNameContaining($namePart);
    }

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @Rest\QueryParam(name="name", nullable=false, allowBlank=true)
     * @Rest\QueryParam(name="cities", nullable=false, allowBlank=true)
     * @param ParamFetcher $params
     * @return string
     */
    public function getSubwaysAction(ParamFetcher $params)
    {
        return $this->ls->findSubways($params);
    }
    /**
     * @Rest\View(serializerGroups={"Default"})
     * @Rest\QueryParam(name="name", nullable=false, allowBlank=true)
     * @Rest\QueryParam(name="city", nullable=false, allowBlank=true)
     * @param ParamFetcher $params
     * @return string
     */
    public function getStreetsAction(ParamFetcher $params)
    {
        return $this->ls->findStreets($params);
    }

    /**
     * @return LocationService
     */
    public function getLs()
    {
        return $this->ls;
    }

    /**
     * @param LocationService $ls
     */
    public function setLs($ls)
    {
        $this->ls = $ls;
    }


}