<?php


namespace AppBundle\Service;

use AppBundle\Entity\SpkInvestBlocks;
use AppBundle\Entity\SpkInvestEncumbrances;
use AppBundle\Entity\SpkInvestment;
use AppBundle\Entity\SpkInvestSegments;
use AppBundle\Entity\SpkLandlords;
use AppBundle\Entity\SpkTenants;
use AppBundle\Form\BlockDTO;
use AppBundle\Form\LandlordDTO;
use AppBundle\Form\SpkInvestmentDTO;
use AppBundle\Form\TenantDTO;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use EntityManager55c9a3e050a67_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager;
use FOS\RestBundle\Request\ParamFetcher;
use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;
use JMS\DiExtraBundle\Annotation\Service;
use JMS\DiExtraBundle\Annotation as DI;

use Symfony\Component\PropertyAccess\PropertyAccess;


/**
 * @Service("stein.investment_service")
 */
class InvestmentService
{
    const ENCUMBRANCES_LIST = "INVEST_OBREMENENIE";
    const INVEST_SEGMENTS_LIST = "INVEST_SEGMENT";
    /**
     * @DI\Inject("doctrine.orm.entity_manager")
     * @var EntityManager
     */
    public $em;

    /**
     * @DI\Inject("stein.pick_list")
     * @var PickListService
     */
    public $pickListService;

    /**
     * @param ParamFetcher $params
     * @return array
     */
    public function findByCriteria(ParamFetcher $params)
    {
        $qb = $this->em->getRepository('AppBundle:SpkInvestment')->createQueryBuilder('i');
        return $qb->setMaxResults(100)
            ->getQuery()
            ->getResult();
    }



    public function saveOrUpdate(SpkInvestmentDTO $investment)
    {
        if (!$investment->getId()) {
            return $this->createNew($investment);
        } else {
            return $this->update($investment);
        }
    }

    private function createNew(SpkInvestmentDTO $dto)
    {
        $investment = new SpkInvestment();

        $investment->setNameRus($dto->getNameRus());
        $investment->setPropertyType($dto->getPropertyType());
        $investment->setStatus($dto->getStatus());
        $investment->setSegment($dto->getSegment());

        /** @var BlockDTO $segment */
        foreach ($dto->getBlocks() as $blockDTO) {
            $block = new SpkInvestBlocks();
            $block->setFloor($blockDTO->getFloor());
            $block->setAvailableSq($blockDTO->getAvailableSq());
            $block->setCostSqm($blockDTO->getCostSqm());
            $block->setCostSqmCurrency($blockDTO->getCostSqmCurrency());
            $investment->getBlocks()->add($blockDTO);
            $block->setInvestment($investment);
        }
        $this->em->persist($investment);
        $this->em->flush();
        return $investment;

//        $encumbrances = new ArrayCollection();
//        if (!empty($dto->getEncumbrances())) {
//            $encumbrancesList = $this->pickListService->getListByType(self::ENCUMBRANCES_LIST);
//            foreach ($dto->getEncumbrances() as $pickListEncumbrance) {
//                foreach ($encumbrancesList as $item) {
//                    if ($item->getText() == $pickListEncumbrance) {
//                        $encumbrance = new SpkInvestEncumbrances();
//                        $encumbrance->setEncumbranceid($item->getId());
//                        $encumbrances[] = $encumbrance;
//                    }
//                }
//            }
//        }
//        $investment->setEncumbrances($encumbrances);
//
//        $investSegments = new ArrayCollection();
//        if (!empty($dto->getInvestSegments())) {
//            $segmentsList = $this->pickListService->getListByType(self::INVEST_SEGMENTS_LIST);
//            foreach ($dto->getInvestSegments() as $pickListInvestSegment) {
//                foreach ($segmentsList as $item) {
//                    if ($item->getText() == $pickListInvestSegment) {
//                        $segment = new SpkInvestSegments();
//                        $segment->setSegmentid($item->getId());
//                        $investSegments[] = $segment;
//                    }
//                }
//            }
//        }
//        $investment->setInvestSegments($investSegments);
//
//        $blocks = new ArrayCollection();
//        foreach ($dto->getBlocks() as $blockDTO) {
//            $block = new SpkInvestBlocks();
//            $block->setFloor($blockDTO->getFloor());
//            $block->setAvailableSq($blockDTO->getAvailableSq());
//            $block->setCostSqm($blockDTO->getCostSqm());
//            $block->setCostSqmCurrency($blockDTO->getCostSqmCurrency());
//            $blocks[] = $block;
//        }
//        $investment->setBlocks($blocks);
//
//        $landlords = new ArrayCollection();
//        /* @var $landlordDTO LandlordDTO */
//        foreach ($dto->getLandlords() as $landlordDTO) {
//            $landlord = new SpkLandlords();
//            $landlord->setContactType($landlordDTO->getContactType()->getId());
//            $landlord->setPrimaryContact($landlordDTO->getPrimaryContact());
//            $landlord->setCurrentContact($landlordDTO->getCurrentContact());
//            $landlord->setAccountid($landlordDTO->getAccount()->getId());
//            $landlord->setStartdate(new DateTime($landlordDTO->getStartDate()));
//            $landlord->setEnddate(new DateTime($landlordDTO->getEndDate()));
////            $landlord->setContactid($landlordDTO->getContactDetail()->getId());
//            $landlords[] = $landlord;
//        }
//        $investment->setLandlords($landlords);
//
//        $tenants = new ArrayCollection();
//        /* @var $tenantDTO TenantDTO */
//        foreach ($dto->getTenants() as $tenantDTO) {
//            $tenant = new SpkTenants();
//            $tenant->setContactType($tenantDTO->getContactType()->getId());
////            $tenant->setPrimaryContact($tenantDTO->getPrimaryContact());
//            $tenant->setCurrentContact($tenantDTO->getCurrentContact());
//            $tenant->setAccountid($tenantDTO->getAccount()->getId());
//            $tenant->setStartdate(new DateTime($tenantDTO->getStartDate()));
//            $tenant->setEnddate(new DateTime($tenantDTO->getEndDate()));
//            $tenant->setArea($tenantDTO->getArea());
////            $tenant->setContactid($landlordDTO->getContactDetail()->getId());
//            $tenants[] = $tenant;
//        }
//        $investment->setTenants($tenants);
//
//
//        $this->em->persist($investment);
//        $this->em->flush();
//        return $investment;
    }

    private function update(SpkInvestmentDTO $dto)
    {
        return new SpkInvestment();
    }

    /**
     * @return InvestmentService
     */
    public function getEm()
    {
        return $this->em;
    }

    /**
     * @param InvestmentService $em
     */
    public function setEm($em)
    {
        $this->em = $em;
    }

}