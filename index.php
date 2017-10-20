<?php
require 'class/Autoloader.php';
Autoloader::register();


$form = new Form (array('lastname'=>'toto'));



echo $form->input("lastname");

echo $form->submit();
