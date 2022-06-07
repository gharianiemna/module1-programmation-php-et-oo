<?php
include('connect.php');
 $sqlQuery = 'DELETE FROM articles WHERE id=:id';

 $deleteArticle = $db->prepare($sqlQuery);
 $deleteArticle->execute([
    'id' => $_GET['id']
 ]);

 header('Location: '.$rootUrl.'index.php');

?>