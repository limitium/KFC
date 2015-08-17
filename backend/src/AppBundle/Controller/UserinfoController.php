<?php


namespace AppBundle\Controller;


use AppBundle\Service\LocationService;
use AppBundle\Service\UserService;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\HttpFoundation\JsonResponse;


class UserinfoController extends Controller
{

    /**
     * @DI\Inject("stein.userservice")
     * @var UserService
     */
    private $userService;

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @Rest\QueryParam(name="name", nullable=false)
     * @param ParamFetcher $params
     * @return string
     */
    public function getUserinfosHintAction(ParamFetcher $params)
    {
        return $this->userService->findUsersByCriteria($params);
    }

}