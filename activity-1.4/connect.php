
<?php
try
{
    $db = new PDO('mysql:host=localhost;dbname=database;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>

 <?php 
//connection to database
// $connection=mysqli_connect('localhost','root','','database');
// if($connection){
//    echo "we are  connected";
// }else {
//     die("database connection failed");
// }


 
?> 