<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/26/2015
 * Time: 4:53 PM
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;


/**
 * Picklist
 *
 * @ORM\Table(name="PICKLIST", uniqueConstraints={
 * @ORM\UniqueConstraint(name="KF_SR_IX_ITEMID", columns={"ITEMID"}),
 * @ORM\UniqueConstraint(name="KF_SR_IX_ITEMID", columns={"ITEMID"}),
 * })
 * @ORM\Entity
 */
class PicklistItem
{
    /**
     * @Id
     * @ORM\Column(name="ITEMID", type="string", length=12, nullable=true)
     */
    private $itemid;

    /**
     * @var string
     *
     * @ORM\Column(name="TEXT", type="string", length=64, nullable=true)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="PICKLISTID", type="string", length=12, nullable=true)
     */
    private $picklistid;

    /**
     * @var string
     *
     * @ORM\Column(name="SHORTTEXT", type="string", length=64, nullable=true)
     */
    private $shorttext;

    /**
     * @ManyToOne(targetEntity="Picklist", inversedBy="items")
     * @JoinColumn(name="ITEMID", referencedColumnName="PICKLISTID")
     **/
    private $list;
}