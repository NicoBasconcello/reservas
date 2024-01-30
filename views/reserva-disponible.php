<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Reservas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .reservas-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .reserva-item {
            border: 1px solid #ccc;
            margin-bottom: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="reservas-container">
        <h2>Lista de Reservas</h2>

        <!-- <?php foreach ($reservasMostradas as $reserva): ?>
            <div class="reserva-item">
                <p><strong>Habitación:</strong> <?php echo $reserva->habitacion->numero; ?></p>
                <p><strong>Check-in:</strong> <?php echo $reserva->checkIn; ?></p>
                <p><strong>Check-out:</strong> <?php echo $reserva->checkOut; ?></p>
            </div>
        <?php endforeach; ?> -->

        <!-- <?php if (empty($reservasMostradas)): ?>
            <p>No hay reservas disponibles para el período especificado.</p>
        <?php endif; ?> -->
    </div>
</body>
</html>
