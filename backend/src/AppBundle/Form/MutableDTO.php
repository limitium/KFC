<?php


namespace AppBundle\Form;


class MutableDTO extends IdentifiableDTO
{
    private $createuser;
    private $createdate;
    private $modifyuser;
    private $modifydate;

    public function getCreateuser()
    {
        return $this->createuser;
    }

    public function setCreateuser($createuser)
    {
        $this->createuser = $createuser;
    }

    public function getCreatedate()
    {
        return $this->createdate;
    }

    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;
    }

    public function getModifyuser()
    {
        return $this->modifyuser;
    }

    public function setModifyuser($modifyuser)
    {
        $this->modifyuser = $modifyuser;
    }

    public function getModifydate()
    {
        return $this->modifydate;
    }

    public function setModifydate($modifydate)
    {
        $this->modifydate = $modifydate;
    }

}