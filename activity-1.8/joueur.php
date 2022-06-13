<?php 

require('sortChild.php');
class Joueur {
  
    private string $pseudo;
    private int $vie=30;
    private int $mana =10;
    public array $monstresPlace = array();
    public  array $main = array();

    function __construct($pseudo) {
        $this->pseudo = $pseudo;
     
   }

   public function getManaJoueur(){
    return $this->mana;
    
}

   public function getPseudo(){
    return $this->pseudo; }

   public function getVie(){
    return $this->vie; }

    public function setVie($vie){
         $this->vie=$vie;
 } 
   public function getmonstresPlace() {
    return $this->monstresPlace;
}
   public function getMain() {
    return $this->main;
}
    public function placerMonstre (Monstre $monstre){
       
        if (count($this->monstresPlace)<5){
         array_push($this->monstresPlace, $monstre);}else{
                echo'your desk is full';
             }

       
        
    }
    public function  __toString() {
        $str=''; 
        foreach ($this->monstresPlace as $key =>$value){
       $str= $str .'le joueur '.$this->pseudo .' possede le monstre N°'.($key+1). ' de points de Mana '. $value->getMana(). ' de points de Dégat '. $value->getDegat(). ' et de points de Vie '. $value->getVie() .PHP_EOL;
      
        }
        return PHP_EOL. $str;
    }

    public function montrerMain(){
        $str=''; 
        foreach ($this-> main as $key =>$value){
       $str= $str .'le joueur posséde le sort N°'. ($key+1). ' de points de Mana égal à '. ($value->getMana()). ' et de points de Dégat égal à '. ($value->getDegat()) .PHP_EOL;
      
        }
        return PHP_EOL. $str;
       

    }   
    public function piocher( Sort $sort){
       array_push($this->main,$sort=new Sort());
       return $this->main;
   }

 

    public function jouer(Joueur $joueur,int $n){
        foreach($this->main as $key => $value){
            if($key === $n && $this->mana >= $value->getMana()){
                $joueur->vie = $joueur->vie - $value->getDegat();
                $this->mana = $this->mana - $value->getMana();
                unset($this->main[$key]);
            } 
        }
}}
$joueur=new Joueur('rania');
$joueur3=new Joueur('emna');
// $joueur->piocher($sort= new Sort);
// $joueur->piocher($sort= new Sort);
// $joueur->piocher($sort= new Sort);


// //  echo $joueur->montrerMain();
//  echo $joueur->jouer($joueur3, 2);
// echo $joueur->piocher($sort= new Sort);
// print_r ($joueur->main);
// //  print_r($joueur3);



