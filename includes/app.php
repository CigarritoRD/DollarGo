<?php
require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

use App\Usuario;

// instancia conexion en este archivo
$db = conexionDb();

// llevo la conexion a la funcion conectdb de la clase Usuario
Usuario::conectDb($db);