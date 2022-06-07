<?php 
include 'connect.php';
?>

<?php

// usort($articles, 'date_compare');
// *****si on va extraire les donner du fichier JSON:
// $articles_json ='';
// $file = "data.json";
// //sil le fichier .json existe, on va extraire ses données sinon on a la variable vide
// if(is_file($file)){
//     $articles_json = file_get_contents($file);
// }
// //on decode les données sytaxe json pour la comprendre
// $articles = json_decode($articles_json, true);


// sin on va extraire les données de la base sql
$articlesStatement = $db->prepare('SELECT * FROM articles');
$articlesStatement->execute();
$articles = $articlesStatement->fetchAll();

// $dates = array();
// foreach ($articles as $key => $row){
//     $dates[$key] = $row['date_publication'];  
// }
// array_multisort($date, SORT_DESC, $articles);

//*****selon sorting de habib :******
function date_compare($element1, $element2) {
    $datetime1 = strtotime($element1['date_publication']);
    $datetime2 = strtotime($element2['date_publication']);
    return $datetime2 - $datetime1;
} 

usort($articles, 'date_compare');

function  getArticles($n=null){
  $array=array();
    global $articles;
    // foreach($articles as $article){
    //     if(($article['date']) < time()){
    //         $tab[] = $article;
    //     }
    // }
    foreach($articles as $article){
        if(strtotime($article['date_publication']) < time()){
            $tab[] = $article;
        }
    }
    if ($n===null || $n>count($tab)){
        return($tab);
    }
    for ($i=0 ; $i< $n ; $i++) {
     $array[]=  $tab[$i];
       
        }
     return $array;
}
// print_r(getArticles(7));