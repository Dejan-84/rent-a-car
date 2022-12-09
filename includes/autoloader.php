<?php

spl_autoload_register('myAutoloader');

function myAutoloader($className){
    $path = 'Classes/';
    $extension = '.php';
    $fullPath = $path . $className . $extension;

    if(!file_exists($fullPath)){
        return false;
    }

    include_once $fullPath;
    
}

  /*spl_autoload_register(function($classname){
    include_once 'classes/' .$classname. '.php';
    
  });*/
  

?>