<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkManage
 *
 */
class SpkManage
{
    /**
     * @var string
     *
     */
    private $spkManageid;

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
     * @var integer
     *
     */
    private $residential;

    /**
     * @var integer
     *
     */
    private $retail;

    /**
     * @var integer
     *
     */
    private $office;

    /**
     * @var integer
     *
     */
    private $industrial;

    /**
     * @var string
     *
     */
    private $serverPath;

    /**
     * @var string
     *
     */
    private $webPath;


}
