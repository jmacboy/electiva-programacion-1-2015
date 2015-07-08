$(document).ready(function () {
    llamarMarcador();
});
function llamarMarcador() {
    var param = "task=marcador&id=1";
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/testServidor/Peticiones.php",
        data: param,
        success: function (msg) {
            console.log(msg);
            //Se ejecuta cuando todo llegó correctamente
            var marcador = JSON.parse(msg);
            $('#nombreEquipo1').text(marcador.nombreEquipo1);
            $('#nombreEquipo2').text(marcador.nombreEquipo2);
            $('#marcadorEquipo1').text(marcador.marcadorEquipo1);
            $('#marcadorEquipo2').text(marcador.marcadorEquipo2);
            setTimeout(llamarMarcador, 5000);
        },
        error: function (msg) {
            //Se ejecuta cuando no llegó correctamente
            console.log("error");
        }
    });
}