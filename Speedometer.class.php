<?php

class Speedometer{
    public const MILES = 1.609344;
    

    
    public static function convertKmToMiles($nb){
        return $nb / self::MILES ;
    }
    public static function convertMilesToKm($nb){
        return $nb * self::MILES;
    }
}