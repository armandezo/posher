<?php

// SIRVE PARA SABER QUE TIPO DE METODO RECIBIMOS LA PETICION
function isRequest() {
    $method = @$_SERVER['REQUEST_METHOD'];
    switch (strtoupper($method)) {
        case 'PUT':
            return 'PUT';
            break;
        case 'POST':
            return 'POST';
            break;
        case 'GET':
            return 'GET';
            break;
        case 'DELETE':
            return 'DELETE';
            break;
        default:
            return '';
            break;
    }
}

function imprimir($data) {
    echo "<pre>", print_r($data), "</pre>";
    die();
}

function encriptar($string) {
    return base64_encode($string);
}

function desencriptar($string) {
    return base64_encode($string);
}

function tableORM($tableName) {
    @$tbl = explode(".", str_replace('`', '', @$tableName));
    return @$tbl[1];
}

?>