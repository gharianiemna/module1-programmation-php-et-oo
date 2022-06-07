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

         <h6> Le <?php echo  $art['date_publication'] ?></h6>
        <p><?php echo $art['texte'] ?></p>
        
                <a  class="btn btn-primary" href="delete_post.php?id=<?php echo $art['id']?>">Supprimer</a>
                <!-- <a  class="btn btn-info" href="modal_comment.php?article_id=<?php// echo $art['id']?>">add comment</a> -->


                <h4 style="margin-left:15px">Commentaires:</h4>
                
                <?php
                $commentsStatement = $db->prepare('SELECT * FROM commentaire WHERE article_id = :id');
                $commentsStatement->execute([
                    'id'=>$art['id']
                ]);
                $comments = $commentsStatement->fetchAll();
                 ?>
                <?php foreach($comments as $comment):?>
                    <div style="margin-left:35px;background-color:rgb(233, 231, 231);margin-bottom:10px;padding:10px;border-radius:5px 5px;width:70%;">
                    <p><?php echo $comment['texte'] ?></p>
                    <p>Publié par : <strong> <?php echo $comment['auteur'] ?></strong>, le <strong><?php echo $comment['date_publication'] ?></strong></p>
                    </div>
                <?php endforeach ?> 

                <hr style="width:85%;margin:auto;margin-bottom:10px">

                <form action="addComment.php" method="post" style="margin-bottom:10px;margin-left:20px;">
                <input type="hidden" name="article_id" value="<?php echo $art['id']?>">
                <input type="hidden" name="date" value="<?php echo date('Y-m-d')?>">
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
        
<footer>
    <?php
    include 'footer.php';
    ?>
</html>

