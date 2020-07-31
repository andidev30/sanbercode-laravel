<?php 

    class Frog extends Animal
    {
        public function __construct($param)
        {
            $this->nama = $param;
        }

        public function jump()
        {
            return "hop hop";
        }
        
    }
    