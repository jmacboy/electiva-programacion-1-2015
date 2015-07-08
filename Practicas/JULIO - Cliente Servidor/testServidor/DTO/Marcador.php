<?php

class Marcador {

    public $id;
    public $marcadorEquipo1;
    public $marcadorEquipo2;
    public $nombreEquipo1;
    public $nombreEquipo2;

    function getId() {
        return $this->id;
    }

    function getMarcadorEquipo1() {
        return $this->marcadorEquipo1;
    }

    function getMarcadorEquipo2() {
        return $this->marcadorEquipo2;
    }

    function getNombreEquipo1() {
        return $this->nombreEquipo1;
    }

    function getNombreEquipo2() {
        return $this->nombreEquipo2;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setMarcadorEquipo1($marcadorEquipo1) {
        $this->marcadorEquipo1 = $marcadorEquipo1;
    }

    function setMarcadorEquipo2($marcadorEquipo2) {
        $this->marcadorEquipo2 = $marcadorEquipo2;
    }

    function setNombreEquipo1($nombreEquipo1) {
        $this->nombreEquipo1 = $nombreEquipo1;
    }

    function setNombreEquipo2($nombreEquipo2) {
        $this->nombreEquipo2 = $nombreEquipo2;
    }

}

?>