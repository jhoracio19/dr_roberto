<?php

define('TEMPLATE_URL', __DIR__ . '/templates/');
define('FUNCIONES_URL', __DIR__ . '/funciones/');

function incluirTemplate(string $nombre, bool $inicio = false){
    include TEMPLATE_URL . "/{$nombre}.php";
}

function debugear($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

function estaAutenticado(){
    session_start();

    if(!$_SESSION['login']){
        header('Location: /');
    }
}