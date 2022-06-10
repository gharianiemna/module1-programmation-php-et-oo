<?php 
require('monstre.php');
class Sort {
  
    private int $mana;
    private int $degats;
    // private int $vie;

    
     
     function __construct($mana,$degats) {
          $this->mana = $mana; 
          $this->degats = $degats;  
     }
  
    public function attaquer ( Monstre $monstre){
      
        $dg = $monstre->getVie() - $this->degats;
        // echo $dg;
       $monstre->setVie($dg);
       echo $monstre->getVie();
    }
}
$monstre=new Monstre(5,15,3);
$sort=new sort(4,6);
// $monstre=new Monstre(5,10,3);
// echo $monstre->getvie().PHP_EOL;
$sort->attaquer($monstre);
?>