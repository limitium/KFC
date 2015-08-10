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


}