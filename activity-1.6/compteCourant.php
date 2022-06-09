<?php
declare(strict_types=1);
require('compte.php');
class ComptePayant  extends compte {
  
    public static int $opération =2;
  //  public function __construct($solde){
   // parent::__construct($solde, $code, $unite, $n);
    //}  
public function retraitCourant(float $som) {
    $this->solde=$this->solde  - $som - self::$opération;
}
    }

        
    $compte5=new ComptePayant(50);
    $compte5->retraitCourant(5);
    $compte5->affichageSolde();

    $compte6=new ComptePayant(10);
    $compte6->retraitCourant(5);
    $compte6->affichageSolde();
    
    