<?php

namespace Models;

class Reserve
{
    private $reserveid;
    private $transmitterid;
    private $receiverid;
    private $petid;
    private $firstdate;
    private $lastdate;
    private $amount;
    private $status;

    /**
     * @return mixed
     */
    public function getReserveid()
    {
        return $this->reserveid;
    }

    /**
     * @param mixed $reserveid
     */
    public function setReserveid($reserveid)
    {
        $this->reserveid = $reserveid;
    }

    /**
     * @return mixed
     */
    public function getTransmitterid()
    {
        return $this->transmitterid;
    }

    /**
     * @param mixed $transmitterid
     */
    public function setTransmitterid($transmitterid)
    {
        $this->transmitterid = $transmitterid;
    }

    /**
     * @return mixed
     */
    public function getReceiverid()
    {
        return $this->receiverid;
    }

    /**
     * @param mixed $receiverid
     */
    public function setReceiverid($receiverid)
    {
        $this->receiverid = $receiverid;
    }

    /**
     * @return mixed
     */
    public function getPetid()
    {
        return $this->petid;
    }

    /**
     * @param mixed $petid
     */
    public function setPetid($petid)
    {
        $this->petid = $petid;
    }

    /**
     * @return mixed
     */
    public function getFirstdate()
    {
        return $this->firstdate;
    }

    /**
     * @param mixed $firstdate
     */
    public function setFirstdate($firstdate)
    {
        $this->firstdate = $firstdate;
    }

    /**
     * @return mixed
     */
    public function getLastdate()
    {
        return $this->lastdate;
    }

    /**
     * @param mixed $lastdate
     */
    public function setLastdate($lastdate)
    {
        $this->lastdate = $lastdate;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}