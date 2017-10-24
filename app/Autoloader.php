<?php
namespace App;

class Autoloader {

 static function autoload($class){
 	if(strpos($class,__namespace__.'\\') === 0) {
   $class=str_replace(__namespace__.'\\','',$class);
   $class=str_replace('\\','/',$class);
   require __DIR__.'/'.$class.'.php';
    }
 }

 static function register (){

 	spl_autoload_register(array(__CLASS__, 'autoload'));
 }


	
}
