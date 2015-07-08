<?php
include_once './BLL/PersonaBLL.php';
$objPersonaBLL = new PersonaBLL();

$id = $_REQUEST["id"];

$objPersona = $objPersonaBLL->SelectById($id);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="PersonaSelect.php" method="GET">
            <input name="idActualizar" type="hidden" value="<?php echo $objPersona->getId(); ?>"
            <div>
                Nombre:
            </div>
            <div>
                <input name="nombrePersona" type="text" value="<?php echo $objPersona->getNombrePersona() ?>"/>
            </div>
            <div>
                Ciudad:
            </div>
            <div>
                <input name="ciudadPersona" type="text" value="<?php echo $objPersona->getCiudadPersona() ?>"/>
            </div>
            <div>
                Edad:
            </div>
            <div>
                <input name="edad" type="number" value="<?php echo $objPersona->getEdad() ?>"/>
            </div>
            <div>
                <input type="submit" value="Actualizar"/>
            </div>
        </form>
    </body>
</html>
