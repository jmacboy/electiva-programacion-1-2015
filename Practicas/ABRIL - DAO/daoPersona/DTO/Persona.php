<?php

/**
 * Description of Persona
 *
 * @author OtroAdmin
 */
class Persona {
    private $id;
    private $nombrePersona;
    private $ciudadPersona;
    private $edad;
    
    function getId() {
        return $this->id;
    }

    function getNombrePersona() {
        return $this->nombrePersona;
    }

    function getCiudadPersona() {
        return $this->ciudadPersona;
    }

    function getEdad() {
        return $this->edad;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombrePersona($nombrePersona) {
        $this->nombrePersona = $nombrePersona;
    }

    function setCiudadPersona($ciudadPersona) {
        $this->ciudadPersona = $ciudadPersona;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }


}
