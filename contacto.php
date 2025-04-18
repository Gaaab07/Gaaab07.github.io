<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REXHA Perú-Inmobiliaria</title>
    <link rel="icon" type="image/jpeg" href="images/logorexha.JPG">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="whatsapp.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="//code.tidio.co/xhva5gtxexj8i56v1ngfiljln6kjbmjk.js" async></script>
</head>
<body class="hidden">
    <div class="centrado" id="onload">
    <div class="lds-default">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
    <header class="header">
    <div class="menu container">
            <a href="#" class="logo">
            <img src="images/rexha 2.png" alt="Logo de REXHA.PE" style="max-width: 140px; height: auto;">
           </a> <!--NOMBRE DE LA EMPRESA-->
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="propiedades.php">Propiedades</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="iniciarsesion.html" target="_blank">Login</a></li>
                  
                  
                    
                </ul>
            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img id="img-carrito" src="images/carrito53.png" alt="car">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>                           
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-3">Vaciar Carrito</a>
                            <a href="#" id="comprar-carrito" class="btn-3" style="display: none;">Comprar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>    
    </header>

    <br>
    
    
    <div class="container">
        <h1 class="text-center">Contáctanos</h1>
        <form action="https://formsubmit.co/b38eb1e0724cd68d0b681a4b96d07217" method="POST">
            <div class="row">
                <!-- Columna de Datos Personales -->
                <div class="col-md-6">
                    <h4>Datos Personales:</h4>
                    <div class="form-group">
                        <label>TIPO DE SOLICITUD*</label>
                        <input type="text" name="Tipo de solicitud" class="form-control" placeholder="Ej. Cotizacion,Consulta,Sobre mi propiedad,Otro motivo" required>
                    </div>
                    <div class="form-group">
                        <label>NOMBRES*</label>
                        <input type="text" name="Nombres" class="form-control" placeholder="Ej. Cesar" required>
                    </div>
                    <div class="form-group">
                        <label>APELLIDOS*</label>
                        <input type="text" name="Apellidos" class="form-control" placeholder="Ej. Aquino Maximiliano" required>
                    </div>
                    <div class="form-group">
                        <label>DIRECCIÓN*</label>
                        <input type="text" name="Direccion"class="form-control" placeholder="Ej. Av. Los Angeles 1025" required>
                    </div>
                    <div class="form-group">
                        <label>DISTRITO*</label>
                        <input type="text" name="Distrito" class="form-control" placeholder="Ej. Villa El Salvador" required>
                    </div>
                    <div class="form-group">
                        <label>DOCUMENTO DE IDENTIDAD*</label>
                        <input type="text" name="Tipo DNI" class="form-control" placeholder="Ej. D.N.I., C.E.,Menos de edad" required>
                    </div>
                    <div class="form-group">
                        <label>N° DOC. IDENTIDAD*</label>
                        <input type="text" name="DNI" class="form-control" placeholder="Ej. 40125201" required>
                    </div>
                </div>

                <!-- Columna de Datos de Contacto -->
                <div class="col-md-6">
                    <h4>Datos de Contacto:</h4>
                    <div class="form-group">
                        <label>CORREO ELECTRÓNICO*</label>
                        <input type="email" name="Correo electronico" class="form-control" placeholder="Ej. nombre@correo.com" required>
                    </div>
                    <div class="form-group">
                        <label>CELULAR*</label>
                        <input type="text" name="Celular" class="form-control" placeholder="Ej. +51 994-000-000" required>
                    </div>
                    <div class="form-group">
                        <label>Comentarios</label>
                        <textarea name="Comentarios" class="form-control" placeholder="Escribe tus comentarios aquí..." rows="3"></textarea>
                    </div>
                    <div class="form-group text-center">
                       <img src="images/logorexha.JPG" alt="Descripción de la imagen" class="img-fluid">
                    </div>
                </div>
            </div>
            
            <input type="submit" class="btn btn-block btn-lg btn-primary" value="Enviar">
        </form>
        <p>&nbsp;</p>
    </div>
    <br>

    <!-- Google Maps iframe -->
<h4 class="text-center">Encuéntranos en el mapa:</h4>
<p class="text-center">Visítanos en nuestra ubicación para más información.</p>
<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093173!2d144.95373631531664!3d-37.81627997975124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11b07f%3A0x5045675218cee50!2sMelbourne%20Victoria!5e0!3m2!1ses!2sau!4v1634597525910!5m2!1ses!2sau"
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>
    <br>

    <footer class="footer">
    <div class="footer-content container">
        <div class="link">
            <h3>Enlaces de Navegación</h3>
            <ul>
                <li><a href="nosotros.php">Acerca de</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="privacidad.php">Política de Privacidad</a></li>
                <li><a href="/reclamos.php" target="_blank">Libro de Reclamos</a></li>
            </ul>
        </div>

        <div class="link">
            <h3>Redes Sociales</h3>
            <ul>
                <li><a href="https://www.twitter.com" target="_blank">Twitter</a></li>
                <li><a href="https://www.instagram.com/zumateong?igsh=MTljZzlmczJoZmxrYQ==" target="_blank">Instagram</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=61565989621254" target="_blank">Facebook</a></li>
                <li><a href="https://www.linkedin.com/company/ong-zumate/posts/?feedView=all " target="_blank">LinkedIn</a></li>
            </ul>
        </div>

            <div class="link">
            <h3>Información Legal</h3>
            <ul>
                <li><a href="terminos.php">Términos de Usos</a></li>
                <li><a href="cookies.php">Política de Cookies</a></li>
            </ul>

            
        </div>
    </div>

    <div class="text-center" style="margin-top: 20px;">
        <p>&copy; 2024 ZUMATE ONG. Todos los derechos reservados.</p>
    </div>


</footer>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="script.js"></script>

    <script>
        document.addEventListener('visibilitychange', function() {
            if (document.hidden) 
            {
                document.title = " 😰no te vayas "; // Mostrar mensaje
            } else {
                document.title = '😁Gracias por volver '; // Ocultar mensaje
            }
        });
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=51932779837&text=Hola%20sean%20bienvenidos,%20deseo%20conversar%20con%20el%20vendedor" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
</body>
</html> 