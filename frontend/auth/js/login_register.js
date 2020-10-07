$(document).ready(function () {
    $(".btnlogin").click(function () {
        var user = $("#usuario").val();
        var password = $("#clave").val();
        $.post(ruta() + "login",
                {
                    usuario: user,
                    clave: password,
                    cmd: 'login'
                },
                function (json) {

                    if (json['status'] == 'Error') {
                        toastr.error('Alerta', json['msg']);
                    } else if (json['status'] == 'Ok') {
                        toastr.success('Bien Hecho', json['msg']);

                        setTimeout(function () {
                            location.href = "../micuenta";
                        }, 2000);

                    }
                });
    });
});

$(document).ready(function () {
    $(".btnregister").click(function () {
        var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var direccion = $("#direccion").val();
        var correo = $("#correo").val();
        var celular = $("#celular").val();
        var user = $("#usuarioreg").val();
        var password = $("#clavereg").val();
        $.post(ruta() + "register",
                {
                    nombre: nombre,
                    apellido: apellido,
                    direccion: direccion,
                    celular: celular,
                    correo: correo,
                    usuarioreg: user,
                    clavereg: password,
                    cmd: 'register'
                },
                function (json) {

                    if (json['status'] == 'Error') {
                        toastr.error('Alerta', json['msg']);
                    } else if (json['status'] == 'Ok') {
                        toastr.success('Bien Hecho', json['msg']);
                        document.getElementById("formloginregister").reset();
                    }
                });
    });
});