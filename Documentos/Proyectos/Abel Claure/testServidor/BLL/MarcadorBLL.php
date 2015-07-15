<?php

class MarcadorBLL {

    function selectAll() {
        $claseConexion = new Connection();

        $csql = "SELECT 
                    id, 
                    marcadorEquipo1,
                    marcadorEquipo2,
                    nombreEquipo1,
                    nombreEquipo2
                FROM
                        tblMarcadores";
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
                    marcadorEquipo1,
                    marcadorEquipo2,
                    nombreEquipo1,
                    nombreEquipo2
                FROM
                        tblMarcadores
                WHERE 
                    id = :idMarcadores";
        $res = $claseConexion->queryWithParams($csql, array(
            ":idMarcadores" => $id
        ));
        $row = $res->fetch(PDO::FETCH_ASSOC);
        $objPersona = $this->rowToDto($row);
        return $objPersona;
    }

    function insert($marcadorEquipo1, $marcadorEquipo2, $nombreEquipo1, $nombreEquipo2) {
        $claseConexion = new Connection();
        $csql = "INSERT INTO tblMarcadores(marcadorEquipo1, marcadorEquipo2, nombreEquipo1, nombreEquipo2)
            VALUES (0,:marcadorEquipo1, :marcadorEquipo2, :nombreEquipo1,:nombreEquipo2)";
        $claseConexion->queryWithParams($csql, array(
            ":marcadorEquipo1" => $marcadorEquipo1,
            ":marcadorEquipo2" => $marcadorEquipo2,
            ":nombreEquipo1" => $nombreEquipo1,
            ":nombreEquipo2" => $nombreEquipo2
        ));
    }

    function update($id, $marcadorEquipo1, $marcadorEquipo2, $nombreEquipo1, $nombreEquipo2) {
        $claseConexion = new Connection();
        $csql = "UPDATE tblMarcadores
                SET marcadorEquipo1 = :marcadorEquipo1, 
                    marcadorEquipo2 =  :marcadorEquipo2,
                    nombreEquipo1 =  :nombreEquipo1,
                    nombreEquipo2 =  :nombreEquipo2
                WHERE
                    id = :idMarcadores";
        $claseConexion->queryWithParams($csql, array(
            ":marcadorEquipo1" => $marcadorEquipo1,
            ":marcadorEquipo2" => $marcadorEquipo2,
            ":nombreEquipo1" => $nombreEquipo1,
            ":nombreEquipo2" => $nombreEquipo2,
            ":idMarcadores" => $id
        ));
    }

    function delete($id) {
        $claseConexion = new Connection();
        $csql = "DELETE FROM tblMarcadores WHERE id = :idMarcadores";
        $claseConexion->queryWithParams($csql, array(
            ":idMarcadores" => $id
        ));
    }

    function rowToDto($row) {
        $objMarcador = new Marcador();
        $objMarcador->setId($row["id"]);
        $objMarcador->setMarcadorEquipo1($row["marcadorEquipo1"]);
        $objMarcador->setMarcadorEquipo2($row["marcadorEquipo2"]);
        $objMarcador->setNombreEquipo1($row["nombreEquipo1"]);
        $objMarcador->setNombreEquipo2($row["nombreEquipo2"]);
        return $objMarcador;
    }

}

?>
