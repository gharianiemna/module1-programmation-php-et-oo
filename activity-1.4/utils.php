<?php 
include 'connect.php';
?>

<?php
$articlesStatement = $db->prepare('SELECT * FROM articles');
$articlesStatement->execute();
$articles = $articlesStatement->fetchAll();

function date_compare($element1, $element2) {
    $datetime1 = strtotime($element1['date_publication']);
    $datetime2 = strtotime($element2['date_publication']);
    return $datetime2 - $datetime1;
} 

usort($articles, 'date_compare');

function  getArticles($n=null){
  $array=array();
    global $articles;

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

