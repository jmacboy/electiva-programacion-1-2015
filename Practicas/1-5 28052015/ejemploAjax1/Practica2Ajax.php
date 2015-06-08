<?php

class Resultado {

    public $res;

}

$objResultado = new Resultado();
$paramRecibido1 = $_REQUEST["parametro1"];
$paramRecibido2 = $_REQUEST["parametro2"];
$objResultado->res = $paramRecibido1 . " " . $paramRecibido2;
echo json_encode($objResultado);
?>
