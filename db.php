<?php
// db.php - Conexión a la base de datos

$servername = "localhost:3307"; // Dirección del servidor (generalmente localhost)
$username = "root";        // Usuario de la base de datos
$password = "";            // Contraseña de la base de datos (si existe)
$dbname = "tu_base_de_datos"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli ($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn -> connect_error);
}

// Si la conexión es exitosa, $conn será utilizado para interactuar con la base de datos
?>