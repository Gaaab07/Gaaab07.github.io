<?php
// pagina_contenido.php

// Verificar si el usuario está logueado
session_start();
if (!isset($_SESSION['usuario'])) {
    // Si no está logueado, redirigir al login
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Contenido</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Puedes agregar tu CSS -->
</head>
<body>
    <div class="container">
        <h1>Bienvenido a la página de contenido</h1>
        <p>Este es un ejemplo de una página PHP con contenido HTML.</p>

        <div class="contenido">
            <h2>Contenido de la página</h2>
            <p>Aquí puedes agregar cualquier tipo de contenido HTML que desees.</p>
        </div>

        <div class="actions">
            <a href="dashboard.php" class="button">Volver al Dashboard</a>
        </div>
    </div>
</body>
</html>
