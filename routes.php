<?php

    $view = str_replace('/', '', $_SERVER['REQUEST_URI']);
    
    if(!$view){
        $view = 'index';
    }

    if(! file_exists("./views/$view.view.php")){
        http_response_code(404);
        die();
    }
    
    require 'views/templates/app.php'
?>