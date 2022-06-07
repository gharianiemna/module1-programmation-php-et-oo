<?php 
//connection to database
$connection=mysqli_connect('localhost','root','','database');
if($connection){
   echo "we are  connected";
}else {
    die("database connection failed");
}


 
?>