<?php
require_once("vehicle.class.php");

class car extends Vehicle{

    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color,int $nbSeats,string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    //getters
    public function getEnergy():string
    {
        return $this->energy;
    }
    
    public function getEnergyLevel():int
    {
        return $this->energyLevel;
    }
    //setters
    public function setEnergy(string $energy)
    {
        if(in_array($energy,self::ALLOWED_ENERGIES))
        {
            $this->energy = $energy;
        }
        return $this;
    }
    public function setEnergyLevel(int $energyLevel)
    {
        $this->nbRoues = $energyLevel;
    }
    //method
    public function start():string
    {
        // $this->currentspeed =0;
        if(!self::setHasParkBrake(true))
        {
            return ("Vous pouvez y aller");
            
        }else{
            throw new Exception("Le frain à main est activée !!!");
        } 
        return  "Go !!!";   
    }
       
    
    public function changeWheel()
    {
        return "you need to change your wheel";
    }
    public function getHasParkBrake()
    {
        $this->HasParkBrake;
    }
    public function setHasParkBrake(bool $hasParkBrake)
    {
        $this->HasParkBrake = $hasParkBrake;
    }
    
}