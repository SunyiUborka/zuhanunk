<?php

namespace  app\model;


class Repuloter{

    private $airiport_name;
    private $country_name;
    private $timezone;
    private $gmt;

    /**
     * @param $airiport_name
     * @param $country_name
     * @param $timezone
     * @param $gmt
     */
    public function __construct($airiport_name, $country_name, $timezone, $gmt)
    {
        $this->airiport_name = $airiport_name;
        $this->country_name = $country_name;
        $this->timezone = $timezone;
        $this->gmt = $gmt;
    }

    /**
     * @return mixed
     */
    public function getAiriportName()
    {
        return $this->airiport_name;
    }

    /**
     * @param mixed $airiport_name
     */
    public function setAiriportName($airiport_name)
    {
        $this->airiport_name = $airiport_name;
    }

    /**
     * @return mixed
     */
    public function getCountryName()
    {
        return $this->country_name;
    }

    /**
     * @param mixed $country_name
     */
    public function setCountryName($country_name)
    {
        $this->country_name = $country_name;
    }

    /**
     * @return mixed
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param mixed $timezone
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    }

    /**
     * @return mixed
     */
    public function getGmt()
    {
        return $this->gmt;
    }

    /**
     * @param mixed $gmt
     */
    public function setGmt($gmt)
    {
        $this->gmt = $gmt;
    }


}






?>
