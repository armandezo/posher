<?php

$hoy = date("Y-m-d");

require '../../Medoo/vendor/autoload.php';

use Medoo\Medoo;

if ($typeconexion == 'orm') {
    // Initialize
    // Si usas Medoo leer los tipos de conexiones en mysql, sql, etc. Ir aqui : https://medoo.in/api/new
    $pdo = new Medoo(
            [
        'database_type' => 'mysql',
        'database_name' => DB_NAME,
        'server' => DB_HOST,
        'username' => DB_USER,
        'password' => DB_PASS
            ]
    );
} else {
    // CONEXION A LA BASE DE DATOS - MYSQL
    $pdo = new PDO('mysql:host='
            . DB_HOST
            . '; dbname=' . DB_NAME
            , DB_USER
            , DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

// Permisos Ajax
$ajax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';

// Mensaje de error array
$json = array(
    'status' => 'Error',
    'msg' => 'Acceso Denegado.'
);
