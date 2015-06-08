<?php

class Resultado {

    public $res;

}

$objResultado = new Resultado();
$objResultado->res = "Hola Mundo";
echo json_encode($objResultado);
?>

