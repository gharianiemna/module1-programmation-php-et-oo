<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>commentaire</title>
    <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>


<?php 
include 'header.php';
?>
<?php 
include 'connect.php';
?>
<?php echo ($_GET['article_id']); ?>
<div class="article">
<h2>Ajoutez un nouveau commentaire</h2>


<form method="post" action="modal_comment.php">


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Text</label>
    <input type="texte" name ='texte' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:50%;">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Author</label>
    <input type="texte" name ='auteur' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:50%;">
 
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Date</label>
    <input type="date" name ='date' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:50%;">

  </div>

  <input type="hidden" name="article_id" value= <?php $_GET['article_id']?> />
  <button type="submit" class="btn btn-primary" name ='submit_comment' >enregistrer</button>

  
</form>
</div>
      

<?php 
// $article_id = $_GET['article_id'];

if ( isset($_POST['submit_comment'])) {
    // on va inserer dans la base de donnée dans le tableau, dans les colonnes les values qui sont les valeurs ecrite par utilisateur
    $sqlQuery = 'INSERT INTO commentaire(texte, auteur, date_publication) VALUES (:texte, :auteur, :date_publication, )';
    global $article_id;
    echo $article_id;
    // print_r( $_GET);
    $insertComment = $db->prepare($sqlQuery);
    
    $insertComment->execute([
      
        'texte' => $_POST['texte'],
        'auteur' => $_POST['auteur'],
        'date_publication' => $_POST['date'], 
        'article_id' => $_POST['article_id']
    ]);
}
    ?>

</body>
</html>