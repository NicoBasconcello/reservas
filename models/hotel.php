<?php
class Hotel {
    public $nombre;
    public $direccion;
    public $telefono;
    public $habitaciones = [];

    public function __construct($nombre, $direccion, $telefono) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
    }

    public function agregarHabitacion($habitacion) {
        $this->habitaciones[] = $habitacion;
    }
}
?>