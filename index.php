<?php

$controller = "index";

if(isset($_SERVER['PATH_INFO'])){
    $controller = str_replace('/', '', $_SERVER['PATH_INFO']); // Corrigindo erro na chamada de função
}

// Forma correta de incluir a variável na string:
require "controllers/" . $controller . ".controller.php";

?>


