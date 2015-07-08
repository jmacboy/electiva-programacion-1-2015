var peticion = new XMLHttpRequest();
function hacerLlamadaAjax() {

    var txtParam1 = document.getElementById("txtParametro1");
    var txtParam2 = document.getElementById("txtParametro2");

    var valor1 = txtParam1.value;
    var valor2 = txtParam2.value;

    var url = "Practica2Ajax.php?parametro1=" + valor1 + "&parametro2=" + valor2;
    peticion.open("GET", url, true);

    peticion.setRequestHeader("content-type", "application/json");
    peticion.setRequestHeader("Accept", "application/json");

    peticion.onreadystatechange = manejarLlegadaPeticion;
    peticion.send()
}
function manejarLlegadaPeticion() {
    var textoRecibido = peticion.responseText;
    var objRecibido = JSON.parse(textoRecibido);
    var spanResultado = document.getElementById("resultado");
    spanResultado.innerHTML = objRecibido.res;
}