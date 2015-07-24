<?php

namespace AppBundle\Controller;

use Doctrine\ORM\Query\ResultSetMapping;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcher;


use FOS\RestBundle\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Form;


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
        $em = $this->getDoctrine()->getManager();
        $type = $params->get('type', '');
        $rsm = new ResultSetMapping();
        $rsm->addScalarResult('picklistid', 'picklistid');
        $rsm->addScalarResult('picklistname', 'picklistname');
        $rsm->addScalarResult('shorttext', 'shorttext');
        $rsm->addScalarResult('text', 'text');
        $rsm->addScalarResult('shorttext', 'shorttext');
        $entities = $this->getDoctrine()->getManager()->createNativeQuery("select pp.itemid picklistid,
                pp.text picklistname,
                pc.text,
                pc.shorttext,
                pc.itemid
                from picklist pp
                left join picklist pc on pp.itemid = pc.picklistid
                where pp.picklistid = 'PICKLISTLIST'
                and pp.text like ?", $rsm)->setParameter(1, $type)->getResult();
        return $entities;
    }
}
