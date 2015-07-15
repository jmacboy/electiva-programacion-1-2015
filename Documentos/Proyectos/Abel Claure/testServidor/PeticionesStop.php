<?php
include './BLL/StopBLL.php';
include './DAL/Connection.php';
include './DTO/Stop.php';


$objstopBLL = new StopBLL();

$task = $_REQUEST["task"];
if ($task == "insertar") {
    $nombre = $_REQUEST["paramNombre"];
    $apellido= $_REQUEST["paramApellido"];
    $ciudad = $_REQUEST["paramCiudad"];
    $pais = $_REQUEST["paramPais"];
    $animal= $_REQUEST["paramAnimal"];
    $planta = $_REQUEST["paramPlanta"];
    $cosa = $_REQUEST["paramCosa"];

    $objstopBLL->insert($nombre, $apellido, $ciudad, $pais, $animal, $planta, $cosa);

    echo "true";
    
} else if ($task == "obtener") {
    $id = $_REQUEST["paramId"];

    $objstopBLL = $objstopBLL->select($id);

    echo json_encode($objstopBLL);

}

if($estado == TRUE){
    
    llamarbloqueo();
    echo 'true';
}
?>