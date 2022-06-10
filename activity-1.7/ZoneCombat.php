<?php 
require('monstre.php');

class ZoneCombat {
  
    private string $joueurA;
    private string $joueurB;
    static int $nbMonstreParJoueur =5;
   


    function __construct($joueurA, $joueurB) {
        $this->joueurA = $joueurA;
        $this->joueurB = $joueurB;
   }


}