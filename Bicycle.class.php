<?php
require_once("vehicle.class.php");
require_once("LightableInterface.interface.php");

class Bicycle extends Vehicle implements LightableInterface{ 

    
    public function changeWheel()
    {
        return "you need to change your wheel";
    }

    public function switchOn()
    {
        if(parent::getCurrentSpeed() > 10){
            return true;
        }else{
            return false;
        }
    public function switchOff()
    {
        return false;
    }
}
