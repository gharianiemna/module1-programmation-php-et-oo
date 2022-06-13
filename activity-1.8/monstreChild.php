<?php 
include ('cartes.php');
include ('DamageableInterface.php');
class Monstre extends Carte  implements DamageableInterface {
  
    private int $vie ;
    function __construct(){
        parent::__construct();
        $this->vie = (rand(0,10));    
    }
    
    public function setVie($vie){
        $this->vie = $vie;
     }
     public function getVie(){
        return $this->vie;
      
     } 
  
     public function takeDamages($n){
        if(  $this->vie > $n){
       return  $this->vie= $this->vie - $n;}else{
           return $this->vie=0;
        }
     }
    public function attaquer ( DamageableInterface $monstre){
        $monstre->takeDamages($this->degats);

        print_r($monstre);
    }

  
}

// $monstre=new Monstre();
// $monstre1=new Monstre();
// $monstre2=new Monstre();
//  echo $monstre->getMana();
// $monstre->attaquer($monstre1);
?>