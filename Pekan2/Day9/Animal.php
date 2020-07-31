<?php 

    class Animal
    {
        public function __construct($param)
        {
            $this->nama = $param;
            $this->legs = 0;
            $this->cold_blooded = "false";
        }
        
        public function name()
        {
            return $this->nama;
        }

        public function legs()
        {
            return $this->legs = 2;
        }
    }
    