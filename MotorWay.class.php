<?php
require_once("HighWay.class.php");

final class MotorWay extends HighWay{

    public function addVehicle($vehicle)
    {
        if($vehicle instanceof Bicycle){
            return "Ce véhicule n'est pas autorisé à accéder à cette route ! ";
        }else{
            $this->currentVehicles[] = $vehicle;
        }
    }

    public function setNbLane($nbLane)
    {
        $this->nbLane = 4;
    }
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = 130;
    }
}