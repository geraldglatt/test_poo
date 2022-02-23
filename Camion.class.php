<?php
require_once("Vehicle.class.php");

class Camion extends vehicle
{
    private int $capacity;
    private string $energy;


    public function __construct($capacity,$color,$nbSeats,$energy)
    {
        parent::__construct($color,$nbSeats);
        $this->setCapacity = $capacity;
        $this->setEnergy = $energy;
    }
    //getters
    public function getCapacity():int
    {
        return $this->capacity;
    }
    public function getEnergy():string
    {
        return $this->energy;
    }
    public function setCapacity(int $capacity)
    {
        $this->capacity = $capacity;
    }
    public function setEnergy(string $energy)
    {
        $this->energy = $energy;
    }
    //method
    public function isFull(int $full)
    {
        if($full == 0){
            return "is filling";
        }else{
            return "full";
        }
    }

}