<?php

class Vehicle{

    protected string $color;
    protected int $currentSpeed;
    protected int $nbSeats;
    protected int $nbWheels;

    public function __construct(string $color, int $nbSeats){

        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }
    //getters
    public function getColor(): string
    {
        return $this->color;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function getNbWheels()
    {
        return $this->nbWheels;
    }
    //setters
    public function setColor(string $color)
    {
        $this->color = $color;
    }
    public function setCurrentSpeed(int $currentSpeed)
    {
        $this->setCurrentSpeed = $currentSpeed;
    }
    public function setNbSeats(int $nbSeats)
    {
        $this->nbSeats = $nbSeats;
    }
    public function setNbWheels(int $nbWheels)
    {
        $this->nbWheels = $nbWheels;
    }
    //method
    public function forward($fast): string
    {
        $this->currentSpeed = $fast;
        return "Go !";
    }
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}