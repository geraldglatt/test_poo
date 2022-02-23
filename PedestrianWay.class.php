<?php
require_once("HighWay.class.php");

final class PedestrianWay extends HighWay{

    public function addVehicle($vehicle)
    {
        if($vehicle instanceof Car || $vehicle instanceof Camion){
            return "Ce véhicule n'est pas autorisé à accéder à cette route ! ";
        }else{
            $this->currentVehicles[] = $vehicle;
        }
    }

    public function setNbLane($nbLane)
    {
        $this->nbLane = 1;
    }
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = 10;
    }
}