function ruta() {
    var r = String(window.location).split('/');
    var ruta = r[0] + "//" + r[2] + "/" + r[3] + "/backend/api/web/";
    return ruta;
}

