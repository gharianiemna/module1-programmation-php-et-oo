<?php
declare(strict_types=1);
require('compte.php');

class CompteEpargne extends Compte {
  
        public static float $tauxInteret =0.06;
        // public function __construct($solde){
        //     parent::__construct($solde, $code, $unite, $n);
         
        // }
            public function calculInteret(): float
            {
                return $this->solde = $this->solde+   $this->solde * self::$tauxInteret; 
               
             
            }
        }

        

$compte4=new CompteEpargne(2);
$compte4->calculInteret();
$compte4->affichageSolde();




