<?php

require  '../app/Autoloader.php';
App\Autoloader::register();


if(isset($_GET['p'])){
	$p=$_GET['p'].'.php';
} else {
	$p='home.php';
}


ob_start();
require '../pages/'.$p;
$content=ob_get_clean();
require '../pages/template/default.php';

?>




