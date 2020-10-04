<?php

//require '../../api/routes/permits_ionic/permisos_ionic.php';
require_once '../routes/app.php';

if ($ajax) {
    if (isRequest() == 'POST') {

        $input = filter_input_array(INPUT_POST);
        //$input = json_decode(file_get_contents('php://input'), true);

        $userVerify = htmlspecialchars(trim(@$input['usuario']));

        $verificar = $pdo->select(tableORM($table['usuario']), "usuario", [
            "usuario" => $userVerify
        ]);

        if (empty($verificar)) {

            $cmd = htmlspecialchars(trim(@$input['cmd']));
            $nombre = htmlspecialchars(trim(@$input['nombre']));
            $apellido = htmlspecialchars(trim(@$input['apellido']));
            $celular = htmlspecialchars(trim(@$input['celular']));
            $correo = htmlspecialchars(trim(@$input['correo']));
            $direccion = htmlspecialchars(trim(@$input['direccion']));
            $usuario = htmlspecialchars(trim(@$input['usuarioreg']));
            $clave = htmlspecialchars(trim(@$input['clavereg']));

            if (
                    $cmd === 'register' &&
                    !empty($nombre) &&
                    !empty($apellido) &&
                    !empty($celular) &&
                    !empty($correo) &&
                    !empty($direccion) &&
                    !empty($usuario) &&
                    !empty($clave)
            ) {
                $data = $pdo->insert(
                        tableORM($table['usuario']),
                        [
                            "nombre" => ucwords($nombre),
                            "apellido" => ucwords($apellido),
                            "celular" => $celular,
                            "correo" => $correo,
                            "direccion" => $direccion,
                            "usuario" => str_replace(" ", "", $usuario),
                            "clave" => encriptar($clave),
                            "idtipo" => 2,
                            "estado" => "activo"
                        ]
                );

                $account_id = $pdo->id(); // al registrar obtengo el ultimo id de registrar

                $data->rowCount();

                if ($data) {
                    $json['status'] = 'Ok';
                    $json['msg'] = $string['success_user'];
                } else {
                    $json['msg'] = $string['error_user'];
                }
            } else {
                $json['msg'] = $string['error_empty'];
            }
        } else {
            $json['msg'] = $string['existing_user'];
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
