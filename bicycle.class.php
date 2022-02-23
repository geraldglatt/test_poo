<?php

class Bicycle{

        private string $color;
        private int $currentSpeed;
        private int $nbSeats;
        private int $nbRoues;

        public function __construct(string $color)
        {
            $this->color = $color;
        }
        //getters
        public function getColor():string
        {
            return $this->color;
        }
        public function getCurrentSpeed():int
        {
            return $this->color;
        }
        public function getNbSeats():int
        {
            return $this->color;
        }
        public function getNbRoues():int
        {
            return $this->color;
        }
        //setters
        public function setColor(string $color):void
        {   
            $this->color = $color;
        }
        public function setCurrentSpeed(int $currentSpeed): void
        {
            if($currentSpeed >= 0) {
                $this->currentSpeed = $currentSpeed;
            }
        }
        public function setNbSeats(int $nbSeats):void
        {   
            $this->color = $nbSeats;
        }
        public function setNbRoues(int $nbRoues):void
        {   
            $this->color = $nbRoues;
        }


        public function dump()
        {
            var_dump($this);
        }

        public function forward(): string
        {
            $this->currentSpeed = 15;
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
