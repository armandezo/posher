<?php

// Para web
// Para movil ionic quitar $ajax y agregar estos encima de todos
/*
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Credentials: true");
  header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
  header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
  header("Content-Type: application/json; charset=utf-8");
 */
require_once '../routes/app.php';

if ($ajax) {
    if (isRequest() == 'POST') {
        $input = filter_input_array(INPUT_POST);
        $json = array(
            'status' => 'Ok',
            'msg' => 'Mensaje de ejemplo POST',
        );
    } else if (isRequest() == 'GET') {
        $input = filter_input_array(INPUT_GET);
        $json = array(
            'status' => 'Ok',
            'msg' => 'Mensaje de ejemplo GET',
        );
    } else {
        $json['msg'] = $string['error_method'];
    }
} else {
    $json['msg'] = $string['error_ajax'];
}

//'X-Requested-With', 'XMLHttpRequest'
header('Content-Type: application/json');
echo json_encode($json, JSON_UNESCAPED_UNICODE);
