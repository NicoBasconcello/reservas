<?php

class ReservaController{
    private $model;

    public function __construct($reservaModel) {
        $this->model = $reservaModel;
    }


    public function mostrarReservas() {
       
        $reservas = $this->model->obtenerReservas();

        $reservasMostradas = [];
        $fechaActual = date('Y-m-d');

        foreach ($reservas as $reserva) {
            
            if (!$reserva->cancelada && ($reserva->checkOut < $fechaActual || $reserva->checkIn > $fechaActual)) {
                $reservasMostradas[] = $reserva;
            }
        }

        include 'views/index.php';
    }

    

    public function verDetallesReserva($reservaId) {
       
    }
}
?>