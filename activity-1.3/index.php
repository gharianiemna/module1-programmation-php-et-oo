<html>
<head>
<title>header</title>
<link rel="stylesheet" type="text/css" href="style.css" media=”screen” />
</head>
<?php 
include 'header.php';
?>
<h1> Leçon 1.2 : PHP Dans Le Web </h1>
<div class="images">
<img  src="https://media.glassdoor.com/sqll/485967/talan-squarelogo-1452188470682.png" alt="W3Schools.com">
</div>

<?php 
include 'utils.php';
?>

<div class="article"> 
<h2>Les 3 derniers acticles sont :</h2>
<?php $artis=getArticles(3);?>
<?php foreach($artis as $art):?>
    
        <h2> Titre : <?php echo $art['titre'] ?></h2>
        <h4> Par :<?php echo $art['auteur'] ?></h4>

         <h6> Le <?php echo  $art['date'] ?></h6>
        <p><?php echo $art['texte'] ?></p>
  
        <?php endforeach ?>
        </div>
        
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>
</html>