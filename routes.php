<?php


    $controller = "index";

    // Primeiro, verifica o PATH_INFO
    if (isset($_SERVER['PATH_INFO']) && !empty($_SERVER['PATH_INFO'])) {
        $controller = trim($_SERVER['PATH_INFO'], '/');
    } else {
        // Se não existir PATH_INFO, tenta pegar pela REQUEST_URI
        $parsed_url = parse_url($_SERVER['REQUEST_URI']);
        $controller = trim($parsed_url['path'], '/');
    
        // Se estiver vazio, volta para "index"
        if (empty($controller)) {
            $controller = "index";
        }
    }
    
    // Verifica se o arquivo realmente existe antes de incluir
    $file = "controllers/" . $controller . ".controller.php";
    
    if (!file_exists($file)) {
       abort(404);
    }
    
    // Inclui o controlador
    require $file;




?>
