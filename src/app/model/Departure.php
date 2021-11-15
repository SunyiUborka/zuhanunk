<?php

namespace app\model;

class Departure
{
    private $time;
    private $where;
    private $airline;
    private $plane_number;
    private $terminal;
    private $actual;
    private $status;

    public function __construct($time, $where, $airline, $plane_number, $terminal, $actual , $status)
    {
        $this->time = $time;
        $this->where = $where;
        $this->airline = $airline;
        $this->plane_number = $plane_number;
        $this->terminal = $terminal;
        $this->actual = $actual;
        $this->status = $status;
    }
    public function getTime()
    {
        return explode("T", $this->time)[0] . " " . explode("T",  explode("+", $this->time)[0])[1];
    }
    public function getActual()
    {
        return $this->actual;
    }
    public function getAirline()
    {
        return $this->airline;
    }
    public function getPlaneNumber()
    {
        return $this->plane_number;
    }
    public function getStatus()
    {
        $dict = [
            "scheduled"=>"Tervezett",
            "cancelled"=>"Törölt",
            "landed"=>"Leszállt",
            "active"=>"Aktív"
        ];
        foreach ($dict as $en => $hu){
            if ($en == $this->status){
                return $hu . " " . explode("T",  explode("+", $this->actual)[0])[1];
            }
        }

    }

    public function getTerminal()
    {
        return $this->terminal;
    }
    public function getWhere()
    {
        return $this->where;
    }
}