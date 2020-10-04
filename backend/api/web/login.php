<?php

//require '../../api/routes/permits_ionic/permisos_ionic.php';
require_once '../routes/app.php';

if ($ajax) {
    if (isRequest() == 'POST') {

        $input = filter_input_array(INPUT_POST);
//        $input = json_decode(file_get_contents('php://input'), true);

        $cmd = htmlspecialchars(trim(@$input['cmd']));
        $usuario = htmlspecialchars(trim(@$input['usuario']));
        $clave = htmlspecialchars(trim(@$input['clave']));

        if (
                $cmd == 'login' &&
                !empty($usuario) &&
                !empty($clave)
        ) {
            $data = $pdo->select(tableORM($table['usuario']),
                    [
                        "[><]" . tableORM($table['tipousuario']) =>
                        [
                            "idtipo" => "id"
                        ], // INNER JOIN
                    ],
                    [
                        // CAMPOS A SELECCIONAR
                        // TABE.CAMPO
                        tableORM($table['usuario']) . ".id(id)",
                        tableORM($table['usuario']) . ".foto(photo)",
                        tableORM($table['usuario']) . ".nombre(name)",
                        tableORM($table['usuario']) . ".apellido(lastname)",
                        tableORM($table['usuario']) . ".celular(phone)",
                        tableORM($table['usuario']) . ".correo(email)",
                        tableORM($table['usuario']) . ".direccion(address)",
                        tableORM($table['usuario']) . ".usuario(user)",
                        tableORM($table['usuario']) . ".clave(password)",
                        tableORM($table['usuario']) . ".estado(status)",
                        tableORM($table['usuario']) . ".idtipo(idtype)",
                        tableORM($table['tipousuario']) . ".nombre(typename)", // (nombretipo) = AS nombretipo
                    ],
                    [
                        // WHERE
                        tableORM($table['usuario']) . ".usuario" => $usuario,
                        tableORM($table['usuario']) . ".clave" => encriptar($clave),
                        tableORM($table['usuario']) . ".estado" => 'activo',
                        tableORM($table['tipousuario']) . ".estado" => 'activo',
                        "LIMIT" => 1
                    ]
            );

            // sirve para ver en que estamos fallando :
            // var_dump($pdo->error());
            //imprimir($data);

            if ($data) {
                session_start();
                session_regenerate_id(true);
                $_SESSION['acceso'] = true;
                $_SESSION['id'] = htmlspecialchars(trim(@$data[0]['id']));
                $_SESSION['photo'] = htmlspecialchars(trim(@$data[0]['photo']));
                $_SESSION['name'] = htmlspecialchars(trim(@$data[0]['name']));
                $_SESSION['lastname'] = htmlspecialchars(trim(@$data[0]['lastname']));
                $_SESSION['phone'] = htmlspecialchars(trim(@$data[0]['phone']));
                $_SESSION['email'] = htmlspecialchars(trim(@$data[0]['email']));
                $_SESSION['address'] = htmlspecialchars(trim(@$data[0]['address']));
                $_SESSION['user'] = htmlspecialchars(trim(@$data[0]['user']));
                $_SESSION['password'] = desencriptar(htmlspecialchars(trim(@$data[0]['password'])));
                $_SESSION['status'] = htmlspecialchars(trim(@$data[0]['status']));
                $_SESSION['idtype'] = htmlspecialchars(trim(@$data[0]['idtype']));
                $_SESSION['typename'] = htmlspecialchars(trim(@$data[0]['typename']));


                // nombre y apellido completo corto
                $nom = explode(" ", htmlspecialchars(trim(@$data[0]['name'])));
                $ape = explode(" ", htmlspecialchars(trim(@$data[0]['lastname'])));
                $_SESSION['pr_nombre'] = $nom[0];
                $_SESSION['nom_ape'] = $nom[0] . ' ' . $ape[0];
                // 

                $json['status'] = 'Ok';
                $json['msg'] = 'Bienvenido, ' . htmlspecialchars(trim(@$data[0]['name'])) . ' ' . htmlspecialchars(trim(@$data[0]['lastname'])) . '.';
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
