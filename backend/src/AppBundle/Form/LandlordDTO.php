<?php


namespace AppBundle\Form;


class LandlordDTO extends IdentifiableDTO
{
    private $contactType;
    private $primaryContact;
    private $currentContact;
    private $account;
    private $startDate;
    private $endDate;
    private $contactDetail;

    /**
     * @return mixed
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * @return mixed
     */
    public function getPrimaryContact()
    {
        return $this->primaryContact;
    }

    /**
     * @return mixed
     */
    public function getCurrentContact()
    {
        return $this->currentContact;
    }

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @return mixed
     */
    public function getContactDetail()
    {
        return $this->contactDetail;
    }


}