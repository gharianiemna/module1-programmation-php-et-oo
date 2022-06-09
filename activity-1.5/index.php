<?php
    session_start();
    if(!isset($_SESSION['login_user'])) {
        header('LOCATION:connexion.php'); die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
</head>
<body>
<?php 
include 'header.php';
include 'connect.php';
?>




<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
<!-- image link-->
            <img class="profile_img" src="https://logodix.com/logo/1984436.jpg" alt="student dp">

<!-- name-->
            <h3><?php echo  $_SESSION['login_user']['Name'] ?></h3>
          </div>
          <div class="card-body">

          <!-- id-->
            <!-- <p class="mb-0"><strong class="pr-1">Student ID:</strong><?php echo  $_SESSION['login_user']['id'] ?></p> -->
            <a href="logout.php"  class="btn btn-info"> <strong class="pr-1">LOGOUT </strong></a>
       
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">AGE</th>
                <td width="2%">:</td>
                <td><?php echo  $_SESSION['login_user']['Age'] ?></td>
              </tr>
              <tr>
                <th width="30%">GENDER	</th>
                <td width="2%">:</td>
                <td><?php echo  $_SESSION['login_user']['Gender'] ?></td>
              </tr>
              <tr>
                <th width="30%">COUNTRY</th>
                <td width="2%">:</td>
                <td><?php echo  $_SESSION['login_user']['Country'] ?></td>
              </tr>
              

            </table>
          </div>
        </div>
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
          </div>
          <div class="card-body pt-0">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
