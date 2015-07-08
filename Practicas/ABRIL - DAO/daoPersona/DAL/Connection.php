<?php

/**
 * Description of Connection
 *
 * @author JM
 */
class Connection {

    private $server = "localhost";
    private $usr = "root";
    private $pass = "";
    private $db = "daoPersona";

    function connect() {
        return mysql_connect($this->server, $this->usr, $this->pass);
    }

    function query($csql) {
        $conexion = $this->connect();
        mysql_select_db($this->db, $conexion);
        return mysql_query($csql, $conexion);
    }
}