<?php
    session_start();
    $id_session = session_id();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<?php 
include 'header.php';
?>

<form class ='wrapper' method="post" action="inscription.php">
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">NAME</label>
    <input type="texte" class="form-control" id="exampleInputPassword1" name="name">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">AGE</label>
    <input type="texte" class="form-control" id="exampleInputPassword1" name="age">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">COUNTRY</label>
    <input type="texte" class="form-control" id="exampleInputPassword1" name="country">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">GENDER</label>
    <input type="texte" class="form-control" id="exampleInputPassword1" name="gender">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"  >Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary"  name="btn">Submit</button>
</form>

<?php 
include 'connect.php';
?>
<?php 

if ( isset($_POST['btn'])) {
    try
{
    // on va inserer dans la base de donnée dans le tableau, dans les colonnes les values qui sont les valeurs ecrite par utilisateur
    $sqlQuery = 'INSERT INTO userdata(Name, Age, Gender, Country, Email, Password) VALUES (:Name, :Age, :Gender, :Country, :Email, :Password)';
    
    $insertUser= $db->prepare($sqlQuery);
    $hashed_password=password_hash($_POST['password'], PASSWORD_DEFAULT);
    $insertUser->execute([
        'Name' => $_POST['name'],
        'Age' => $_POST['age'],
        'Gender' => $_POST['gender'],
        'Country' => $_POST['country'],
        'Email' => $_POST['email'],
        'Password' => $hashed_password,
        ]);
}

catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
}
    ?>


</body>
</html>