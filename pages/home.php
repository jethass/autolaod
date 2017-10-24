<?php

$datas=App\Table\Article::all();

foreach ($datas as $post) {
?>
    <li><a href="<?= $post->url ?>"><?= $post->titre ?></a></li>
    <p><?= $post->extrait ?></p>
<?php	
}