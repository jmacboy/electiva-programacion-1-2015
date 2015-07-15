<?php

class StopBLL{
    
  function selectAll() {
        $claseConexion = new Connection();

        $csql = "SELECT
                id,
                nombre,
                apellido,
                ciudad,
                pais,
                animal,
                planta,
                cosa
                    
                FROM
                        tblstop";
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
                apellido,
                ciudad,
                pais,
                animal,
                planta,
                cosa
                FROM
                        tblstop
                WHERE 
                    id = :idStop";
        $res = $claseConexion->queryWithParams($csql, array(
            ":idStop" => $id
        ));
        $row = $res->fetch(PDO::FETCH_ASSOC);
        $objPersona = $this->rowToDto($row);
        return $objPersona;
    }

    function insert($nombre, $apellido, $ciudad, $pais, $animal, $planta, $cosa) {
        $claseConexion = new Connection();
        $csql = "INSERT INTO tblstop (nombre, apellido, ciudad, pais, animal, planta, cosa)
            VALUES (:nombre, :apellido, :ciudad, :pais, :animal, :planta, :cosa)";
        $claseConexion->queryWithParams($csql, array(
            ":nombre" => $nombre,
            ":apellido" => $apellido,
            ":ciudad" => $ciudad,
            ":pais" => $pais,
            ":animal" => $animal,
            ":planta" => $planta,
            ":cosa" => $cosa
        ));
    }

    function update($id, $nombre, $apellido, $ciudad, $pais, $animal, $planta, $cosa) {
        $claseConexion = new Connection();
        $csql = "UPDATE tblstop
                SET nombre = :nombre, 
                    apellido =  :apellido,
                    ciudad =  :ciudad,
                    pais =  :pais,
                    animal =  :animal,
                    planta =  :planta,
                    cosa =  :cosa
                WHERE
                    id = :idStop";
        $claseConexion->queryWithParams($csql, array(
            ":nombre" => $nombre,
            ":apellido" => $apellido,
            ":ciudad" => $ciudad,
            ":pais" => $pais,
            ":animal" => $animal,
            ":planta" => $planta,
            ":cosa" => $cosa,
            ":idstop" => $id
        ));
    }

    function delete($id) {
        $claseConexion = new Connection();
        $csql = "DELETE FROM tblstop WHERE id = :idstop";
        $claseConexion->queryWithParams($csql, array(
            ":idstop" => $id
        ));
    }

    function rowToDto($row) {
        
        $objstopBLL = new Stop();
        $objstopBLL->setId($row["id"]);
        $objstopBLL->setNombre($row["nombre"]);
        $objstopBLL->setApellido($row["apellido"]);
        $objstopBLL->setCiudad($row["ciudad"]);
        $objstopBLL->setPais($row["pais"]);
        $objstopBLL->setAnimal($row["animal"]);
        $objstopBLL->setPlanta($row["planta"]);
        $objstopBLL->setCosa($row["cosa"]);
        return $objstopBLL;
    }

}

?>
