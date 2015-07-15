$(document).ready(function() {
    llamarStop();
    
    $('#btnInicio').on('click', function () {
         habilitar();
         
     });
        
    
    $('#btnStop').on('click', function () {
            
        llamarBloqueo();    
            
        
        var nombre      = $('#nombre').val();
        var apellido    = $('#apellido').val();
        var ciudad      = $('#ciudad').val();
        var pais        = $('#pais').val();
        var animal      = $('#animal').val();
        var planta      = $('#planta').val();
        var cosa        = $('#cosa').val();
        var param       = 'paramNombre=' + nombre + 
                          '&paramApellido=' + apellido  + 
                          '&paramCiudad=' + ciudad + 
                          '&paramPais=' + pais + 
                          '&paramAnimal=' + animal + 
                          '&paramPlanta=' + planta + 
                          '&paramCosa=' + cosa + "&task=insertar";
                  
                  alert("Stop Enviado");
                  console.log(param);

        //paramNombre=Jose&paramEdad=15&task=insertar

        $.ajax({      
            type: "GET",
            url: "http://localhost:8080/testServidor/PeticionesStop.php",
            data: param,
            success: function (msg) {
                console.log(msg);
                //Se ejecuta cuando todo llegó correctamente
                if (msg == "true") {
                    console.log("Envió correctamente");
                    alert("Inserto Corectamente");
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
    
});

function llamarStop() {
    var param = "task=obtener&paramId=1";
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/testServidor/PeticionesStop.php",
        data: param,
        success: function (msg) {
            console.log(msg);
            //Se ejecuta cuando todo llegó correctamente
            var stop = JSON.parse(msg);
            $('#nombre').text(stop.nombre);
            $('#apellido').text(stop.apellido);
            $('#ciudad').text(stop.ciudad);
            $('#pais').text(stop.pais);
            $('#animal').text(stop.animal);
            $('#planta').text(stop.planta);
            $('#cosa').text(stop.cosa);
            setTimeout(llamarStop, 5000);
            
        },
        error: function (msg) {
            //Se ejecuta cuando no llegó correctamente
            console.log("error");
        }
    });
}
    function llamarBloqueo(){
      
            document.getElementById("btnStop").disabled = true;  
            document.getElementById("nombre").disabled = true;
            document.getElementById("apellido").disabled = true;
            document.getElementById("ciudad").disabled = true;
            document.getElementById("pais").disabled = true;
            document.getElementById("animal").disabled = true;
            document.getElementById("planta").disabled = true;
            document.getElementById("cosa").disabled = true;
    }
    
   
    function habilitar(){
        
            alert("Habilitado");
            console.log("entro inicio");
            document.getElementById("btnStop").disabled = false;
            document.getElementById("nombre").disabled = false;
            document.getElementById("apellido").disabled = false;
            document.getElementById("ciudad").disabled = false;
            document.getElementById("pais").disabled = false;
            document.getElementById("animal").disabled = false;
            document.getElementById("planta").disabled = false;
            document.getElementById("cosa").disabled = false;
            
            document.getElementById("nombre").value="";
            document.getElementById("apellido").value="";
            document.getElementById("ciudad").value="";
            document.getElementById("pais").value="";
            document.getElementById("animal").value="";
            document.getElementById("planta").value="";
            document.getElementById("cosa").value="";
            
           
      }
    