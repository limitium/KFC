<?php

namespace AppBundle\Controller;

use AppBundle\Service\PickListService;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\DiExtraBundle\Annotation as DI;

class PickListController extends Controller
{
    /**
     * @DI\Inject("stein.pick_list")
     * @var PickListService
     */
    private $pl;

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @Rest\QueryParam(name="type", nullable=false)
     * @param ParamFetcher $params
     * @return string
     */
    public function getPicklistAction(ParamFetcher $params)
    {
        $type = $params->get('type', '');
        return $this->pl->getListByType($type);
    }
}
