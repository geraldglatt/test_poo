<?php

class car{

    private int $nbRoues;
    private int $currentspeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color,int $nbSeats,string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    //getters
    public function getNbRoues():int
    {
        return $this->nbRoues;
    }
    public function getCurrentSpeed():int
    {
        return $this->currentspeed;
    }
    public function getEnergyLevel():int
    {
        return $this->energyLevel;
    }
    //setters
    public function setNbRoues(int $nbRoues)
    {
        $this->nbRoues = $nbRoues;
    }
    public function setCurrentSpeed(int $currentspeed)
    {
        $this->nbRoues = $currentspeed;
    }
    public function setEnergyLevel(int $energyLevel)
    {
        $this->nbRoues = $energyLevel;
    }
    //method
    public function start():string
    {
        $this->currentspeed =0;
        return "Start !!!";
    }
    public function forward(): string
    {
        $this->currentspeed = 80;
        return "GO !";
    }
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentspeed > 0){
            $this->currentspeed--;
            $sentence .= "Break !!!";
        }
        $sentence .= "I'm stopped";
        return $sentence;
    }
    
}