<?php

class Stop{
            
    public $id;
    public $nombre;
    public $apellido;
    public $ciudad;
    public $pais;
    public $animal;
    public $planta;
    public $cosa;
    public $estado;
    
    
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getPais() {
        return $this->pais;
    }

    public function getAnimal() {
        return $this->animal;
    }

    public function getPlanta() {
        return $this->planta;
    }

    public function getCosa() {
        return $this->cosa;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }

    public function setAnimal($animal) {
        $this->animal = $animal;
    }

    public function setPlanta($planta) {
        $this->planta = $planta;
    }

    public function setCosa($cosa) {
        $this->cosa = $cosa;
    }
    
    public function setEstado($estado){
        
        $this-> estado= FALSE;
    }

}

