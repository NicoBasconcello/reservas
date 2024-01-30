<?php
class Reserva {
    public $habitacion;
    public $checkIn;
    public $checkOut;
    public $precioTotal;
    public $datosCliente = [];


    public function __construct($habitacion, $checkIn, $checkOut, $precioTotal){
        $this->habitacion = $habitacion;
        $this->checkIn = $checkIn;
        $this->checkOut = $checkOut;
        $this->precioTotal = $precioTotal;
        
    }
}


?>