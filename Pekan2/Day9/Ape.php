<?php 

    class Ape extends Animal
    {
        public function __construct($param)
        {
            $this->nama = $param;
        }
        
        public function yell()
        {
            return "Auooo";
        }
    }
    