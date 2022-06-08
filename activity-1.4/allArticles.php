<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Articles</title>
    <link rel="stylesheet" type="text/css" href="style.css" media=”screen” />
</head>
<body>

<?php 
include 'header.php';
?>
<?php 
include 'utils.php';
?>
<?php include('connect.php') ?>

<div class="article"> 
<h2>Les acticles sont :</h2>
<?php $artis=getArticles();?>
<?php foreach($artis as $art):?>
    
    <h2> Titre : <?php echo $art['titre'] ?></h2>
    <h4> Par :<?php echo $art['auteur'] ?></h4>
    <h6> Le <?php echo  $art['date_publication'] ?></h6>
    <p><?php echo $art['texte'] ?></p>
    <a  class="btn btn-primary" href="delete_post.php?id=<?php echo $art['id']?>">Supprimer</a>
    <!-- <a  class="btn btn-info" href="modal_comment.php?article_id=<?php// echo $art['id']?>">add comment</a> -->



    <h4 style="margin-left:15px">Commentaires:</h4>
            
    <?php
    $commentsStatement = $db->prepare('SELECT * FROM commentaire WHERE article_id = :id');
    $commentsStatement->execute(['id'=>$art['id'] ]);
    $comments = $commentsStatement->fetchAll();
    ?>
            
    <?php if($comments):?>
   
    <?php foreach($comments as $comment):?>
    <div style="margin-left:35px;background-color:rgb(233, 231, 231);margin-bottom:10px;padding:10px;border-radius:5px 5px;width:70%;">
    <p><?php echo $comment['texte'] ?></p>
    <p>Publié par : <strong> <?php echo $comment['auteur'] ?></strong>, le <strong><?php echo $comment['date_publication'] ?></strong></p>
    <a  class="btn btn-danger" href="delete_comment.php?id=<?php echo $comment['id']?>">Supprimer</a>
    </div>
    <?php endforeach ?> 
    <?php endif ?>

    <form action="allArticles.php" method="post" style="margin-bottom:10px;margin-left:20px;">
    <input type="hidden" name="article_id" value="<?php echo $art['id']?>">

    <div class="mb-3 d-flex">
    <input type="text" name="comment" style="width:50%;" class="form-control" id="exampleFormControlInput1" placeholder="Taper un commentaire">
    </div>

    <div class="mb-3 d-flex">
    <input type="text" name="auteur" style="width:50%;" class="form-control" id="exampleFormControlInput1" placeholder="Auteur du commentaire">
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Date</label>
    <input type="date" name ='date' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:50%;">
    </div>

    <button type="submit" name="addComment" class="btn btn-secondary">Ajouter commentaire</button>
    </form> 


<?php endforeach ?>
</div>
    
<?php
if ( isset($_POST['addComment'])) {

$sqlQuery = 'INSERT INTO commentaire(texte, auteur, date_publication, article_id) VALUES (:texte, :auteur, :date_publication, :article_id)';
$addComment = $db->prepare($sqlQuery);
$addComment->execute([
    'texte' => $_POST['comment'],
    'auteur' => $_POST['auteur'],
    'date_publication' => $_POST['date'], 
    'article_id' => $_POST['article_id'], 
]);

// header('Location: '.$rootUrl.'allArticles.php');
}
?>
</body>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>
</html>