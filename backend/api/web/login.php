<?php

require_once '../routes/app.php';

if ($ajax) {
    if (isRequest() == 'POST') {

        //$input = filter_input_array(INPUT_POST);
        $input = json_decode(file_get_contents('php://input'), true);


        $cmd = htmlspecialchars(trim(@$input['cmd']));
        $usuario = htmlspecialchars(trim(@$input['usuario']));
        $clave = htmlspecialchars(trim(@$input['clave']));

        if (
                $cmd == 'login' &&
                !empty($usuario) &&
                !empty($clave)
        ) {
            $data = $pdo->select(
                    tableORM($table['usuarios']),
                    "*",
                    [
                        "usuario" => $usuario,
                        "clave" => encriptar($clave),
                        'LIMIT' => 1
                    ]
            );

            if ($data) {
                session_start();
                session_regenerate_id(true);
                $_SESSION['acceso'] = true;
                $_SESSION['idusuario'] = htmlspecialchars(trim(@$data[0]['idusuario']));
                $_SESSION['nombre'] = htmlspecialchars(trim(@$data[0]['nombre']));
                $_SESSION['apellido'] = htmlspecialchars(trim(@$data[0]['apellido']));
                $_SESSION['celular'] = htmlspecialchars(trim(@$data[0]['celular']));
                $_SESSION['dni'] = htmlspecialchars(trim(@$data[0]['dni']));
                $_SESSION['correo'] = htmlspecialchars(trim(@$data[0]['correo']));
                $_SESSION['direccion'] = htmlspecialchars(trim(@$data[0]['direccion']));
                $_SESSION['usuario'] = htmlspecialchars(trim(@$data[0]['usuario']));
                $_SESSION['clave'] = desencriptar(htmlspecialchars(trim(@$data[0]['clave'])));
                $_SESSION['tipo'] = htmlspecialchars(trim(@$data[0]['tipo']));
                $_SESSION['activo'] = htmlspecialchars(trim(@$data[0]['activo']));

                // nombre y apellido completo corto
                $nom = explode(" ", htmlspecialchars(trim(@$data[0]['nombre'])));
                $ape = explode(" ", htmlspecialchars(trim(@$data[0]['apellido'])));
                $_SESSION['pr_nombre'] = $nom[0];
                $_SESSION['nom_ape'] = $nom[0] . ' ' . $ape[0];
                // 

                $json['status'] = 'Ok';
                $json['msg'] = 'Bienvenido, ' . htmlspecialchars(trim(@$data[0]['nombre'])) . ' ' . htmlspecialchars(trim(@$data[0]['apellido'])) . '.';
                $json['data'] = $data;
            } else {
                $json['msg'] = $string['error_login'];
            }
        } else {
            $json['msg'] = $string['error_empty'];
        }
    } else {
        $json['msg'] = $string['error_method'];
    }
} else {
    $json['msg'] = $string['error_ajax'];
}
//'X-Requested-With', 'XMLHttpRequest'
header('Content-Type: application/json');
echo json_encode($json, JSON_UNESCAPED_UNICODE);
