<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<?php 
include 'header.php';
?>


<?php  $myFile = "data.json"; ?>

<div class="article">
<h2>Ajoutez un nouvel article</h2>


<form method="post" action="form.php">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="texte" name ='titre' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:50%;">
 
  </div>
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

   <button type="submit" class="btn btn-primary"  name="btn">Submit</button>
</form>
</div>

<?php 
include 'connect.php';
?>
<?php 
if ( isset($_POST['btn'])) {
    // on va inserer dans la base de donnée dans le tableau, dans les colonnes les values qui sont les valeurs ecrite par utilisateur
    $sqlQuery = 'INSERT INTO articles(titre, texte, auteur, date_publication) VALUES (:titre, :texte, :auteur, :date_publication)';
    
    $insertArticle = $db->prepare($sqlQuery);
    
    $insertArticle->execute([
        'titre' => $_POST['titre'],
        'texte' => $_POST['texte'],
        'auteur' => $_POST['auteur'],
        'date_publication' => $_POST['date'], 
    ]);
}
    ?>

 <?php 
//creating records into the database articles
 
// $titre=$_POST['titre'];
// $auteur=$_POST['auteur'];
// $texte=$_POST['texte'];
// $date=$_POST['date'];
// $query="INSERT INTO articles(titre,auteur,texte,date_publication)";
// $query.="VALUES('$titre','$auteur','$description','$date')";
// $result=mysqli_query($connection,$query)
 
?> 

 <?php 

?> 


</body>
</html>


