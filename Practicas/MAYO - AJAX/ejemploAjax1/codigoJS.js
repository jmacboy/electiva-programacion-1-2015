var peticion = new XMLHttpRequest();
function llamarHolaMundo() {
    var urlLlamada = "RespuestaLlamada.php";

    peticion.open("GET", urlLlamada, true);

    peticion.setRequestHeader("content-type", "application/json");
    peticion.setRequestHeader("Accept", "application/json");

    peticion.onreadystatechange = manejarLlegadaPeticion;
    
    peticion.send();
}
function manejarLlegadaPeticion() {
    var spanResultado = document.getElementById("resultado");
    var textoRespuesta = peticion.responseText;
    var objRespuesta = JSON.parse(textoRespuesta);
    spanResultado.innerHTML = objRespuesta.res;
}

