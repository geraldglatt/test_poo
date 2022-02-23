<?php
require_once("HighWay.class.php");

final class ResidentialWay extends HighWay{

    public function addVehicle($vehicle)
    {
        $this->currentVehicles[] = $vehicle;
    }
    
    public function setNbLane($nbLane)
    {
        $this->nbLane = 2;
    }
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = 50;
    }
}