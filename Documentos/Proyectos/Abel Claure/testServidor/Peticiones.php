<?php

include './BLL/PruebaPersonaBLL.php';
include './DAL/Connection.php';
include './DTO/PruebaPersona.php';
include './DTO/Marcador.php';
include './BLL/MarcadorBLL.php';
$objPruebaPersonaBLL = new PruebaPersonaBLL();
$objMarcadorBLL = new MarcadorBLL();

$task = $_REQUEST["task"];
if ($task == "insertar") {
    $nombre = $_REQUEST["paramNombre"];
    $edad = $_REQUEST["paramEdad"];

    $objPruebaPersonaBLL->insert($nombre, $edad);
    echo "true";
} else if ($task == "obtener") {
    $id = $_REQUEST["paramId"];

    $objPersonaSeleccionada = $objPruebaPersonaBLL->select($id);

    echo json_encode($objPersonaSeleccionada);
} else if ($task == "marcador") {
    $id = $_REQUEST["id"];
    $objMarcador = $objMarcadorBLL->select($id);

    echo json_encode($objMarcador);
}
?>