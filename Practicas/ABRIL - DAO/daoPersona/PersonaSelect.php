<!DOCTYPE html>
<?php
include_once './BLL/PersonaBLL.php';
$objPersonaBLL = new PersonaBLL();

if (isset($_REQUEST["idAeliminar"])) {
    $id = $_REQUEST["idAeliminar"];
    $objPersonaBLL->Delete($id);
}

if (isset($_REQUEST["idActualizar"])) {
    //actualizar
    if (isset($_REQUEST["nombrePersona"]) && isset($_REQUEST["ciudadPersona"]) && isset($_REQUEST["edad"])) {

        $nombrePersona = $_REQUEST["nombrePersona"];
        $ciudadPersona = $_REQUEST["ciudadPersona"];
        $edad = $_REQUEST["edad"];
        $id = $_REQUEST["idActualizar"];

        $objPersonaBLL->Update($nombrePersona, $ciudadPersona, $edad, $id);
    }
} else {
    //insertar
    if (isset($_REQUEST["nombrePersona"]) && isset($_REQUEST["ciudadPersona"]) && isset($_REQUEST["edad"])) {

        $nombrePersona = $_REQUEST["nombrePersona"];
        $ciudadPersona = $_REQUEST["ciudadPersona"];
        $edad = $_REQUEST["edad"];

        $objPersonaBLL->Insert($nombrePersona, $ciudadPersona, $edad);
    }
}



$listaPersonas = $objPersonaBLL->SelectAll();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <a href="PersonaInsertar.php">Insertar</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Nombre Persona
                    </th>
                    <th>
                        Ciudad
                    </th>
                    <th>
                        Edad
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listaPersonas as $objPersona) {
                    ?>
                    <tr>
                        <td>
                            <?php
                            echo $objPersona->getId();
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $objPersona->getNombrePersona();
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $objPersona->getCiudadPersona();
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $objPersona->getEdad();
                            ?>
                        </td>
                        <td>
                            <a href="PersonaUpdate.php?id=<?php echo $objPersona->getId(); ?>">Actualizar</a>
                        </td>
                        <td>
                            <a href="PersonaSelect.php?idAeliminar=<?php echo $objPersona->getId(); ?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

    </body>
</html>
