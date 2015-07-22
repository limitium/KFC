<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkContactsHistory
 *
 * @ORM\Table(name="SPK_CONTACTS_HISTORY", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_CONTACTS_HISTORY_PRIMARY", columns={"SPK_CONTACTS_HISTORYID"})})
 * @ORM\Entity
 */
class SpkContactsHistory
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_CONTACTS_HISTORYID", type="string", length=12, nullable=false)
     */
    private $spkContactsHistoryid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="WORKED_FROM", type="datetime", nullable=true)
     */
    private $workedFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="WORKED_TO", type="datetime", nullable=true)
     */
    private $workedTo;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=32, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="WORK_POSITION", type="string", length=32, nullable=true)
     */
    private $workPosition;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=32, nullable=true)
     */
    private $contactid;


}
