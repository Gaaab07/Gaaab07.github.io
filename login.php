<?php
// Incluir la conexión a la base de datos
include('db.php'); // Asegúrate de que la ruta a db.php es correcta

// Iniciar sesión
session_start();

// Comprobar si el formulario de login fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['INICIAR_SESION'])) {

    // Recibir los datos del formulario
    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $clave = mysqli_real_escape_string($conn, $_POST['clave']);

    // Validación simple
    if (empty($usuario) || empty($clave)) {
        echo "Por favor, ingresa tu usuario y contraseña.";
    } else {
        // Verificar si el usuario existe en la base de datos
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' OR email = '$usuario'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Si el usuario existe, verificar la contraseña
            $row = $result->fetch_assoc();

            // Verificar la contraseña con password_verify()
            if (password_verify($clave, $row['clave'])) {
                // Iniciar sesión
                $_SESSION['usuario_id'] = $row['id'];
                $_SESSION['usuario'] = $row['usuario'];

                // Redirigir a la página de bienvenida o dashboard
                header("Location: dashboard.php");
                exit;
            } else {
                echo "Contraseña incorrecta.";
            }
        } else {
            echo "Usuario no encontrado.";
        }
    }
}
?>

<!-- Formulario HTML para iniciar sesión -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="icon" type="image/jpeg" href="images/logorexha.JPG">
    <link rel="stylesheet" href="registrate.css">
</head>
<body>     
    <div class="container">
        <form action="login.php" method="post" class="formulario">
            <h2 class="titulo">INICIAR SESIÓN</h2>
            <img src="images/logorexhais.png" alt="Descripción de la imagen" class="imagen-registro">

            <div class="form">

                <div class="usuario">
                    <label for="">Usuario o correo electrónico</label>
                    <input type="text" name="usuario" placeholder="Ingresa tu usuario o correo electrónico">
                </div>

                <div class="clave">
                    <label for="">Contraseña</label>
                    <input type="password" name="clave" placeholder="Ingresa tu contraseña">
                </div>

                <div class="cuenta">
                    <div class="botones">
                       <input class="boton" type="submit" value="LOGIN" name="INICIAR_SESION">
                       <a href="index.php" class="boton">Salir</a> 
                    </div>
                    <div class="recuperar-clave"><br>
                        <a href="recupera_contra.html" class="pregunta-recuperar">¿Olvidaste tu contraseña?</a> 
                    </div>
                    <br>
                    <a href="register.php" class="boton crear-cuenta">Crear Cuenta</a>
                </div>                       
            </div>
        </form>
    </div>
</body>
</html>
