$(document).ready(function () {

    $('#btnInsertarPersona').on('click', function () {
        var nombre = $('#nombre').val();
        var edad = $('#edad').val();

        var param = 'paramNombre=' + nombre + '&paramEdad=' + edad + "&task=insertar";

        //paramNombre=Jose&paramEdad=15&task=insertar

        $.ajax({
            type: "GET",
            url: "http://localhost:8080/testServidor/Peticiones.php",
            data: param,
            success: function (msg) {
                console.log(msg);
                //Se ejecuta cuando todo llegó correctamente
                if (msg == "true") {
                    console.log("Envió correctamente");
                } else {
                    console.log("Hubo un error al insertar");
                }
            },
            error: function (msg) {
                //Se ejecuta cuando no llegó correctamente
                console.log("error");
            }
        });
    });

    $('#btnObtenerPersona').on('click', function () {
        var id = $('#idPersona').val();
        var param = 'paramId=' + id + "&task=obtener";

        //paramId=4&task=obtener

        $.ajax({
            type: "GET",
            url: "http://localhost:8080/testServidor/Peticiones.php",
            data: param,
            success: function (msg) {
                console.log(msg);
                //Se ejecuta cuando todo llegó correctamente
                var objPersona = JSON.parse(msg);
                alert("Persona obtenida: Nombre = " + objPersona.nombre + " y edad = " + objPersona.edad);
            },
            error: function (msg) {
                //Se ejecuta cuando no llegó correctamente
                console.log("error");
            }
        });
    });

});


