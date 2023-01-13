<?php

function autoload($param){

    $param = str_replace('\\','/',$param).".php";
    if(file_exists($param)){
        require_once $param;
    }else{
        exit;
    }
}

spl_autoload_register('autoload');

?>