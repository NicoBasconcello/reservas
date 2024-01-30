<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reservas</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Reservas Actuales</h1>
        <div class="reservas-list">
            <!-- agregar lista de reservas acá -->
        </div>
        <h2>Realizar Nueva Reserva</h2>
        <form id="nuevaReservaForm">
            <label for="habitacion">Número de Habitación:</label>
            <input type="text" id="habitacion" name="habitacion" required>

            <label for="checkIn">Fecha de Check-in:</label>
            <input type="date" id="checkIn" name="checkIn" required>

            <label for="checkOut">Fecha de Check-out:</label>
            <input type="date" id="checkOut" name="checkOut" required>

            <button type="button" onclick="realizarReserva()">Realizar Reserva</button>
        </form>
    </div>
</body>
</html>
