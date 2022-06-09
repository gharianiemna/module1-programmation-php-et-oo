<?php
    session_start();
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
include 'connect.php';
?>


<form class ='wrapper'  method="post" action="connexion.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $_COOKIE['identifiant_connexion']  ?>" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value= "<?php echo $_COOKIE['password_connexion']  ?>">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1"  name='se_souvenir_de_moi'>
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
</form>

<?php
      if(isset($_POST['submit'])){
        $email = $_POST['email']; $password = $_POST['password'];
        $sqlQuery = 'SELECT * FROM userdata WHERE email = :email';
        $user = $db->prepare($sqlQuery);
        $user->execute([
            'email' => $email
        ]);
        $user=$user->fetchAll();
        // print_r($user);
        if($email === $user[0]['Email'] && (password_verify($password, $user[0]['Password']))){
         
          $_SESSION['login_user'] = $user[0];
          
          // $_SESSION['name'] = $user[0]['name'];
          header('LOCATION:index.php'); die();

          if ($_POST['se_souvenir_de_moi']) {
            $timestamp_expire = time() +365*24*3600; // Le cookie expirera dans un an
            setcookie('identifiant_connexion',  $_POST['email'], $timestamp_expire); // On écrit un cookie
            setcookie('password_connexion', $_POST['password'], $timestamp_expire);
        
       
        }
     
        }else {
          echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
        }
        
      }
      ?> 
</body>
</html>