<?php
class Resultado{
    public $res;
}
include './BLL/PruebaBLL.php';
include './DTO/Prueba.php';
include './DAL/Connection.php';
$valNombre = $_REQUEST["nombre"];
$objPruebaBLL = new PruebaBLL();
$objPruebaBLL->Insert($valNombre);
$objResultado = new Resultado();
$objResultado->res = "true";
echo json_encode($objResultado);
?>