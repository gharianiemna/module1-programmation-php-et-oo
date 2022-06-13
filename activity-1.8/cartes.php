<?php 
abstract class Carte {
 
   protected int $mana;
   protected int $degat;

     function __construct() {
          $this->mana = (rand(1,10));
          $this->degat = (rand(1,10));  
     }
  
    
    public function getMana(){
        return $this->mana;
        
    }
    public function getDegat(){
     
        return $this->degat;
    }
   
}
