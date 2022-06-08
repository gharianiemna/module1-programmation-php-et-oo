<?php include('connect.php') ?>
<?php 

 $sqlQuery = 'DELETE FROM commentaire WHERE id=:id';

 $deletecomment= $db->prepare($sqlQuery);
 $deletecomment->execute([
    'id' => $_GET['id']
 ]);

 header('Location: '.$rootUrl.'index.php');

?>
    