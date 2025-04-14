<?php
// Iniciar sesión
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    // Si no está logueado, redirigir al login
    header("Location: login.php");
    exit; // Detener la ejecución para que no se muestre nada más
}

// Incluir la conexión a la base de datos
include('db.php');

// Obtener el nombre de usuario desde la sesión
$usuario = $_SESSION['usuario'];

// Consultar la base de datos para obtener la información del usuario
$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $userData = $result->fetch_assoc(); // Obtener los datos del usuario
} else {
    echo "Error: Usuario no encontrado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" type="image/jpeg" href="images/logorexha.JPG">
    <link rel="stylesheet" href="dashboard.css"> <!-- Agregar tu propio CSS para el dashboard -->
</head>
<body>
    <div class="container">
        <header>
            <h1>Bienvenido al Dashboard, <?php echo htmlspecialchars($userData['nombre']); ?>!</h1>
        </header>

        <section>
            <h2>Información de tu cuenta</h2>
            <ul>
                <li><strong>Nombre:</strong> <?php echo htmlspecialchars($userData['nombre']) . ' ' . htmlspecialchars($userData['apellido']); ?></li>
                <li><strong>Usuario:</strong> <?php echo htmlspecialchars($userData['usuario']); ?></li>
                <li><strong>Correo:</strong> <?php echo htmlspecialchars($userData['email']); ?></li>
            </ul>

            <div class="actions">
                
                <a href="logout.php" class="button">Cerrar sesión</a>
                <a href="index.php" class="button">Empezar</a> <!-- Nuevo botón -->
            </div>
        </section>
    </div>

    <script src="script.js"></script> <!-- Si tienes un script adicional -->
</body>
</html>
