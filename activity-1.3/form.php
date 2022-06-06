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

  <input type="hidden" name="id" value= <?php echo uniqid()?> />

   <button type="submit" class="btn btn-primary"  name="btn">Submit</button>
</form>
</div>


<?php 

if (isset($_POST['btn'])){
$data ='';
$filename = "data.json";
if(is_file($filename)){
    $data = file_get_contents($filename);
}
$json_arr = json_decode($data, true);
$json_arr[]=array('titre' => $_POST['titre'],'texte'=> $_POST['texte'], 'auteur'=> $_POST['auteur'], 'date'=> $_POST['date'], 'id'=> $_POST['id']);

file_put_contents($filename, json_encode($json_arr,JSON_PRETTY_PRINT));
// header("location : http://http://localhost/module1/activity-1.2/form.php");

}
?>
</body>
</html>

<!-- <input type="text" name="nom" value="Mateo21" />

<?php

// Après soumission du formulaire
echo $_GET['nom']; // "Mateo21"

// OU

echo $_POST['nom']; // "Mateo21" -->