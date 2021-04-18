<?php
    class Moto {

        protected $color;

        public function setColor($c){
            $this->color = $c;
        }


        public function getColor(){
            return $this->color."Metalico";
        }
    }