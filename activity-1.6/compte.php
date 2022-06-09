<?php
declare(strict_types=1);

class Compte {
    protected float $solde;
    protected int $code;
    public static int $n = 1;
    protected string $unite = '€';

    public function  __construct($solde){
    $this->code= self::$n++;
        $this->setSolde($solde);
    }
//  puisque le code se cree automatiquement en s'incremetant a chaque ouverture de compte
    // public function setCode($code, $n){
    //  $this->code=$code+ self::$n++;
    // }
        public function setSolde($solde){
             $this->solde=$solde;
            }

public function déposer(float $depot) {
          $this->solde=$this->solde +$depot;
        // var_dump( "bonjour, votre solde apres depot est de " .  $this->solde   . $this->unite); 
 }
 public function retirer(float $somme) {
    $this->solde=$this->solde - $somme;
   // var_dump( "bonjour, votre solde apres retrait est de " .  $this->solde   . $this->unite); 
}
    public function affichageSolde(){
        var_dump( "bonjour compte code: " .$this->code . " votre solde est de " .  $this->solde   . $this->unite); 
}
}

$compte1=new Compte(1);
$compte2=new Compte(12);


$compte1->déposer(5);
$compte1->retirer(3);

$compte1->affichageSolde();

$compte2->déposer(8);
$compte2->affichageSolde();



