<?php 
class Monstre {
  
    private int $mana;
    private int $vie=30 ;
    private int $dégatM;

    
     
     function __construct($mana,$vie,$dégatM) {
          $this->mana = $mana;
          $this->vie = $vie;  
          $this->dégatM = $dégatM;  
     }
  
    public function attaquer ( Monstre $monstre){
        return $this->vie= $this->vie -$this->dégatM;
    }
    public function getVie(){
        return $this->vie;
        return $this->mana;
        return $this->$dégatM;



     } 

     public function setVie($vie){
        $this->vie = $vie;
     }
}
$monstre=new Monstre(5,10,3);
$monstre1=new Monstre(2,5,3);
$monstre2=new Monstre(4,9,3);
//  echo $monstre->getMana();
// echo $monstre->attaquer($monstre);
?>