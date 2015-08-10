<?php


namespace AppBundle\Form;


class CommercDTO extends IdentifiableDTO
{
    private $amount;
    private $amountCurrency;
    private $vat;

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function getAmountCurrency()
    {
        return $this->amountCurrency;
    }

    /**
     * @return mixed
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param mixed $amountCurrency
     */
    public function setAmountCurrency($amountCurrency)
    {
        $this->amountCurrency = $amountCurrency;
    }

    /**
     * @param mixed $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }




}