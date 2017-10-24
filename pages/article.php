<?php 
$post=App\Table\Article::find($_GET['id']);
?>

 <li><?= $post->titre ?></li>
 <p><?= $post->contenu ?></p>
 <p><a href="index.php">Home</a></p>