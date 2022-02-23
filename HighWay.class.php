<?php

abstract class HighWay{
    
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

    //method
    abstract function addVehicle($vehicle);
    

    //getters
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }
    public function getNbLane(){
        return $this->nbLane;
    }
    public function getMaxSpeed(){
        return $this->maxSpeed;
    }
    //setters
    public function setCurrentVehicles($currentVehicles){
        $this->currentVehicles = $currentVehicles;
    }
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }
    public function setMaxSpeed($maxSpeed){
        $this->maxSpeed = $maxSpeed;
    }


}