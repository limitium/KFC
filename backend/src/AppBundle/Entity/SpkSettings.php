<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkSettings
 *
 */
class SpkSettings
{
    /**
     * @var string
     *
     */
    private $spkSettingsid;

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
    private $spkProperty;

    /**
     * @var string
     *
     */
    private $spkValue;


}
