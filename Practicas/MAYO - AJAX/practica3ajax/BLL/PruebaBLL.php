<?php

class PruebaBLL {

    function SelectAll() {
        $claseConexion = new Connection();

        $csql = "SELECT 
                    id, 
                    nombre
                FROM
                        Prueba";
        $res = $claseConexion->query($csql);
        $lista = array();
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $objResultado = $this->rowToDto($row);
            $lista[] = $objResultado;
        }
        return $lista;
    }

    function Select($id) {
        $claseConexion = new Connection();

        $csql = "SELECT 
                    id, 
                    nombre
                FROM
                        Prueba
                WHERE 
                    id = :idPrueba";
        $res = $claseConexion->queryWithParams($csql, array(
            ":idPrueba" => $id
        ));
        $row = $res->fetch(PDO::FETCH_ASSOC);
        $objPrueba = $this->rowToDto($row);
        return $objPrueba;
    }

    function Insert($nombre) {
        $claseConexion = new Connection();
        $csql = "INSERT INTO Prueba(id, nombre)
            VALUES (0,:nombrePrueba)";
        $claseConexion->queryWithParams($csql, array(
            ":nombrePrueba" => $nombre
        ));
    }

    function Update($id, $nombre) {
        $claseConexion = new Connection();
        $csql = "UPDATE Prueba
                SET nombre = :nombrePrueba
                WHERE
                    id = :idPrueba";
        $claseConexion->queryWithParams($csql, array(
            ":nombrePrueba" => $nombre,
            ":idPrueba" => $id
        ));
    }

    function Delete($id) {
        $claseConexion = new Connection();
        $csql = "DELETE FROM Prueba WHERE id = :idPrueba";
        $claseConexion->queryWithParams($csql, array(
            ":idPrueba" => $id
        ));
    }

    function rowToDto($row) {
        $objPrueba = new Prueba();
        $objPrueba->setId($row["id"]);
        $objPrueba->setNombre($row["nombre"]);
        return $objPrueba;
    }

}

?>
