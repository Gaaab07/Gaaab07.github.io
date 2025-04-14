<?php
// Incluir el archivo de conexión a la base de datos
include('db.php'); // Asegúrate de que la ruta a db.php es correcta

// Comprobar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['REGISTRO'])) {

    // Recibir y sanitizar los datos del formulario
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($conn, $_POST['apellido']);
    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $clave = mysqli_real_escape_string($conn, $_POST['clave']);
    
    // Validación simple (asegurarse de que no haya campos vacíos)
    if (empty($nombre) || empty($apellido) || empty($usuario) || empty($email) || empty($clave)) {
        echo "Por favor, completa todos los campos.";
    } else {
        // Verificar si el correo o el usuario ya están registrados
        $sql_check_user = "SELECT * FROM usuarios WHERE usuario = '$usuario' OR email = '$email'";
        $result = $conn->query($sql_check_user);
        
        if ($result->num_rows > 0) {
            // Si el usuario o correo ya existe
            echo "El usuario o correo electrónico ya está registrado.";
        } else {
            // Encriptar la contraseña antes de almacenarla
            $clave_encriptada = password_hash($clave, PASSWORD_BCRYPT);

            // Insertar los datos del nuevo usuario en la base de datos
            $sql = "INSERT INTO usuarios (nombre, apellido, usuario, email, clave) 
                    VALUES ('$nombre', '$apellido', '$usuario', '$email', '$clave_encriptada')";

            if ($conn->query($sql) === TRUE) {
                // Si el registro es exitoso, redirigir al formulario de login
                header("Location: login.php?registro=exitoso");
                exit; // Importante para que no continúe ejecutándose el código
            } else {
                echo "Error al registrar el usuario: " . $conn->error;
            }
        }
    }
}
?>

<!-- Formulario HTML para el registro de usuario -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="icon" type="image/jpeg" href="images/logorexha.JPG">
    <link rel="stylesheet" href="registrate.css">
</head>
<body>
    <div class="container">
        <form action="register.php" method="post" class="formulario">
            <h2 class="titulo">REGISTRO</h2>
            <img src="images/logorexhais.png" alt="Descripción de la imagen" class="imagen-registro">

            <div class="form">
                <div class="nombre">
                    <label for="nombre">Nombres</label>
                    <input type="text" name="nombre" placeholder="Ingresa tus nombres" required>
                </div>

                <div class="apellido">
                    <label for="apellido">Apellidos</label>
                    <input type="text" name="apellido" placeholder="Ingresa tus apellidos" required>
                </div>

                <div class="usuario">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" placeholder="Crea un usuario" required>
                </div>

                <div class="correo">
                    <label for="email">Correo electrónico</label>
                    <input type="email" name="email" placeholder="Ingresa tu correo electrónico" required>
                </div>

                <div class="clave">
                    <label for="clave">Contraseña</label>
                    <input type="password" name="clave" placeholder="Crea una contraseña" required>
                </div>

                <div class="cuenta">
                    <div class="botones">
                        <input class="boton" type="submit" value="Registrar" name="REGISTRO">
                    </div>
                    <br>
                    <a href="login.php" class="boton crear-cuenta">Ya tengo una cuenta</a>
                </div>                       
            </div>
        </form>
    </div>  

    <script>
        document.addEventListener('visibilitychange', function() {
            if (document.hidden) {
                document.title = " 😰no te vayas "; // Mostrar mensaje
            } else {
                document.title = '😁Gracias por volver '; // Ocultar mensaje
            }
        });
    </script>
</body>
</html>
