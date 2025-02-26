<?php

//model

include 'dados.php';



view('index', ['livros' => $livros]);

require "views/template/app.php";

?>