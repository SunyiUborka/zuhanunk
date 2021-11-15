<?php

namespace  app\model;


class Airports{
// letrehozzuk a repülőtér adatait
    
    private $airport_name;
    private $country_name;
    private $timezone;
    private $gmt;
    private $iata;

    public function __construct($airport_name, $country_name, $timezone, $gmt, $iata)
    {
        $this->airport_name = $airport_name;
        $this->country_name = $country_name;
        $this->timezone = $timezone;
        $this->gmt = $gmt;
        $this->iata = $iata;
    }

// Megadjuk, ha egyenként akarjuk lekérdezni, vagy módosítani, a tulajdonságokat.
    public function getAirportName()
    {
        return $this->airport_name;
    }
    public function getCountryName()
    {
        return $this->country_name;
    }
    public function getTimezone()
    {
        return $this->timezone;
    }
    public function getGmt()
    {
        return $this->gmt;
    }
    public function getIata()
    {
        return $this->iata;
    }
}
?>