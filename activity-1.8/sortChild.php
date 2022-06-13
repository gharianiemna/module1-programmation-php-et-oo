<?php 
require('monstreChild.php');

class Sort extends Carte {

     function __construct() {
        parent::__construct();
     }
  
    public function attaquer ( Monstre $monstre){
      
        $dg = $monstre->getVie() - $this->degat;
     
       $monstre->setVie($dg);
       echo $monstre->getVie();
    }
}

?>