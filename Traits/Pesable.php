<?php

    trait Pesable{
        protected  int $weight = 0;

        public function setWeight($weight){
            if($weight > 0){
                $this->weight = $weight;
            } else{ 
                throw new Exception('Il peso deve essere superiore a 0 grammi');
                
            }
        }

        public function getWeight(){
            
            return $this->weight;
        }
    }