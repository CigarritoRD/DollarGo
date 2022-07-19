<?php

define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . '/funciones.php');

function inclurTemplate(string $nombre){
    include TEMPLATES_URL . "/${nombre}.php";
}

function estaAutenticado() : bool {
    session_start();
    $auth = $_SESSION['login'];
    if($auth){
        return true;
    }
    return false;
}

function debugear($dato){
    echo '<pre>';
    var_dump($dato);
    echo '</pre>';
    
    exit;

}