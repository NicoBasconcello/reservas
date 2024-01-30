<?php

$servername = "mysql";
$username = "root";
$password = "";
$database = "reservas";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

?>
