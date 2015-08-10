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

    /**
     * @param mixed $contactType
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;
    }

    /**
     * @param mixed $primaryContact
     */
    public function setPrimaryContact($primaryContact)
    {
        $this->primaryContact = $primaryContact;
    }

    /**
     * @param mixed $currentContact
     */
    public function setCurrentContact($currentContact)
    {
        $this->currentContact = $currentContact;
    }

    /**
     * @param mixed $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @param mixed $contactDetail
     */
    public function setContactDetail($contactDetail)
    {
        $this->contactDetail = $contactDetail;
    }




}