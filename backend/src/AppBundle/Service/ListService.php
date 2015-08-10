<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/1/2015
 * Time: 5:14 PM
 */

namespace AppBundle\Service;

use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;
use JMS\DiExtraBundle\Annotation\Service;
use JMS\DiExtraBundle\Annotation as DI;

use Symfony\Component\PropertyAccess\PropertyAccess;

/**
 * @Service("stein.list_service")
 */
class ListService
{

    private $accesor;

    public function __construct()
    {
        $this->accessor = PropertyAccess::createPropertyAccessor();
    }

    public function transformToList($items, $nameProp, $idProp)
    {
        $result = array();
        foreach ($items as $item) {
            $result[] = $this->transformToListItem($item, $nameProp, $idProp);
        }
        return $result;
    }

    public function transformToListItem($item, $nameProp, $idProp)
    {
        $id = $this->accessor->getValue($item, $idProp);
        $name = $this->accessor->getValue($item, $nameProp);
        return new ListItemDTO($id, $name);
    }

}