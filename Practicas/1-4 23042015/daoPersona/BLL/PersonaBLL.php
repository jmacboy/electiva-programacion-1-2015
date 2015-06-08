<?php

include_once 'DAL/Connection.php';
include_once 'DTO/Persona.php';

/**
 * Description of PersonaBLL
 *
 * @author OtroAdmin
 */
class PersonaBLL {

    private function sql($csql) {
        $obj = new Connection();
        return $obj->query($csql);
    }

    function rowToDto($row) {
        $objDto = new Persona();
        $objDto->setId($row["id"]);
        $objDto->setNombrePersona($row["nombrePersona"]);
        $objDto->setCiudadPersona($row["ciudadPersona"]);
        $objDto->setEdad($row["edad"]);
        return $objDto;
    }

    function SelectAll() {
        $csql = "SELECT id, nombrePersona, ciudadPersona, edad
                FROM tblPersona";
        $res = $this->sql($csql);
        $lista = array();
        while ($row = mysql_fetch_array($res)) {
            $objDto = $this->rowToDto($row);
            $lista[] = $objDto;
        }
        return $lista;
    }

    function SelectById($id) {
        $csql = "SELECT id, nombrePersona, ciudadPersona, edad
                FROM tblPersona WHERE id = " . $id;
        $res = $this->sql($csql);

        $row = mysql_fetch_array($res);
        $objDto = $this->rowToDto($row);

        return $objDto;
    }

    function Insert($nombrePersona, $ciudadPersona, $edad) {
        $csql = "INSERT INTO tblPersona(nombrePersona, ciudadPersona, edad)
                VALUES ('$nombrePersona','$ciudadPersona',$edad)";
        $this->sql($csql);
    }

    function Update($nombrePersona, $ciudadPersona, $edad, $id) {
        $csql = "UPDATE 
                    tblPersona
                SET nombrePersona = '$nombrePersona'
                 ,  ciudadPersona = '$ciudadPersona', 
                    edad = $edad
                WHERE id = $id";
        $this->sql($csql);
    }

    function Delete($id) {
        $csql = "DELETE FROM tblPersona WHERE id = $id";
        $this->sql($csql);
    }

}
