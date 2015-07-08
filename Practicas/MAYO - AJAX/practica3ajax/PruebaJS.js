var peticion = new XMLHttpRequest();

function insertarPrueba() {

    var txtNombre = document.getElementById("nombre");
    var valorNombre = txtNombre.value;

    var url = "FuncionesAjaxPrueba.php?nombre=" + valorNombre;

    peticion.open("GET", url, true);

    peticion.setRequestHeader("content-type", "application/json");
    peticion.setRequestHeader("Accept", "application/json");

    peticion.onreadystatechange = manejarLlegadaInsertar;
    peticion.send();
}
function manejarLlegadaInsertar() {
    if (peticion.readyState == 4) {
        var textoRespuesta = peticion.responseText;
        var objRespuesta = JSON.parse(textoRespuesta);
        if (objRespuesta.res == "true") {
            alert("Prueba insertada correctamente");
        } else {
            alert("Error al insertar prueba");
        }
        var txtNombre = document.getElementById("nombre");
        txtNombre.value = "";
    }
}

