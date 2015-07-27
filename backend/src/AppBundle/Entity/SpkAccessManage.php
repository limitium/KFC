<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkAccessManage
 *
 */
class SpkAccessManage
{
    /**
     * @var string
     *
     */
    private $spkAccessManageid;

    /**
     * @var string
     *
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     */
    private $createdate;

    /**
     * @var string
     *
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     */
    private $modifydate;

    /**
     * @var string
     *
     */
    private $userid;

    /**
     * @var string
     *
     */
    private $accessType;


}
