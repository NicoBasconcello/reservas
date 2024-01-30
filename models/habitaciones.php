<?php
class Habitacion {
    public $numero;
    public $tipo;
    public $precioPorNoche;
    public $capacidad;
    public $instalaciones = [];

    public function __construct($numero, $tipo, $precioPorNoche, $capacidad) {
        $this->numero = $numero;
        $this->tipo = $tipo;
        $this->precioPorNoche = $precioPorNoche;
        $this->capacidad = $capacidad;
    }

    function listarInstalaciones($instalacion){
        $this->instalaciones[] = $instalacion;
    }
}


?>