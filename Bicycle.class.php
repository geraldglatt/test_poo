<?php
require_once("vehicle.class.php");

class Bicycle extends Vehicle{ 
    public function changeWheel()
    {
        return "you need to change your wheel";
    }
}
