<?php

class PruebaPersonaBLL {

    function selectAll() {
        $claseConexion = new Connection();

        $csql = "SELECT 
                    id, 
                    nombre,
                    edad
                FROM
                        tblPruebaPersona";
        $res = $claseConexion->query($csql);
        $lista = array();
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $objResultado = $this->rowToDto($row);
            $lista[] = $objResultado;
        }
        return $lista;
    }

    function select($id) {
        $claseConexion = new Connection();

        $csql = "SELECT 
                    id, 
                    nombre,
                    edad
                FROM
                        tblPruebaPersona
                WHERE 
                    id = :idPersona";
        $res = $claseConexion->queryWithParams($csql, array(
            ":idPersona" => $id
        ));
        $row = $res->fetch(PDO::FETCH_ASSOC);
        $objPersona = $this->rowToDto($row);
        return $objPersona;
    }

    function insert($nombre, $edad) {
        $claseConexion = new Connection();
        $csql = "INSERT INTO tblPruebaPersona(id, nombre, edad)
            VALUES (0,:nombrePersona,:edadPersona)";
        $claseConexion->queryWithParams($csql, array(
            ":nombrePersona" => $nombre,
            ":edadPersona" => $edad
        ));
    }

    function update($id, $nombre, $edad) {
        $claseConexion = new Connection();
        $csql = "UPDATE tblPruebaPersona
                SET nombre = :nombrePersona, 
                    edad =  :edadPersona
                WHERE
                    id = :idPersona";
        $claseConexion->queryWithParams($csql, array(
            ":nombrePersona" => $nombre,
            ":edadPersona" => $edad,
            ":idPersona" => $id
        ));
    }

    function delete($id) {
        $claseConexion = new Connection();
        $csql = "DELETE FROM tblPruebaPersona WHERE id = :idPersona";
        $claseConexion->queryWithParams($csql, array(
            ":idPersona" => $id
        ));
    }
    function deleteAll() {
        $claseConexion = new Connection();
        $csql = "DELETE FROM tblPruebaPersona";
        $claseConexion->query($csql);
    }

    function rowToDto($row) {
        $objPersona = new PruebaPersona();
        $objPersona->setId($row["id"]);
        $objPersona->setEdad($row["edad"]);
        $objPersona->setNombre($row["nombre"]);
        return $objPersona;
    }

}

?>
