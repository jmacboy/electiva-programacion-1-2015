//Linea obligatoria para asegurar compatibilidad
$(document).ready(function(){
    
    //evento click para el boton con id="rojo"
   $('#rojo').on('click',function(){
       //entra acá cuando hacen click en el id rojo
       var cuadroRojo = $('<div class="cuadrorojo">Rojo</div>');
       $('#resultado').append(cuadroRojo);
   });
   
   //evento click para el boton con id="azul"
   $('#azul').on('click',function(){
       //entra acá cuando hacen click en el id azul
       var cuadroAzul = $('<div class="cuadroazul">Azul</div>');
       $('#resultado').append(cuadroAzul);
   });
});