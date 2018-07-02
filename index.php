<?php

error_reporting(-1);
//function chargerClass($class){
////    if(file_exists( __DIR__.'src/'.$class.'.php')){
////        require __DIR__.'src/'.str_replace('\\', '/', $class).'.php';
////    }
//}
//
//spl_autoload_register('chargerClass');

//var_dump($_SERVER['REQUEST_URI']);die;


//----------------------- Autoload via composer -----------------

if(!file_exists(__DIR__.'/vendor/autoload.php')){
    throw new Exception('File npot found');
}

require __DIR__.'/vendor/autoload.php';

echo (new \Application\Application())->dispatch($_SERVER['REQUEST_URI']);