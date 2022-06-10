<?php 
require('monstre.php');
class Joueur {
  
    private string $pseudo;
    private int $vie =30;
    private int $mana =10;
    public array $monstresPlace = array();


    function __construct($pseudo) {
        $this->pseudo = $pseudo;
   }

   public function getmonstresPlace() {
    return $this->monstresPlace;
}
 
    public function placerMonstre (Monstre $monstre){
       
        if (count($this->monstresPlace)<5){
             array_push($this->monstresPlace, $monstre);}else{
                echo'your desk is full';
             }

        print_r($this->monstresPlace);
    }
     
}

$joueur=new Joueur('rania');
 $joueur->placerMonstre($monstre1);
$joueur->placerMonstre($monstre2);
$joueur->placerMonstre($monstre);
$joueur->placerMonstre($monstre1);
$joueur->placerMonstre($monstre2);
$joueur->placerMonstre($monstre);
echo $joueur->monstresPlace;


