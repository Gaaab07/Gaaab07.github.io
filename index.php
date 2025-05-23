<?php
// Iniciar sesión
session_start();

// Verificar si el usuario está logueado
if (isset($_SESSION['usuario'])) {
    // El usuario está logueado, podemos obtener su nombre
    $nombre_usuario = $_SESSION['usuario']; // Esto es lo que almacenaste al momento del login
} else {
    // Si no está logueado, el nombre del usuario estará vacío o podemos poner un mensaje
    $nombre_usuario = "";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REXHA Perú-Inmobiliaria</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
    <link rel="icon" type="image/jpeg" href="images/logorexha.JPG">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="whatsapp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="//code.tidio.co/xhva5gtxexj8i56v1ngfiljln6kjbmjk.js" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
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
            <br>
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

        <br>
        <br>

        <div class="header-content container">
            <div class="header-txt">
                <span>Bienvenido a nuestra inmobiliaria</span> 
                <h1>TODO EN INMOBILIARIA REXHA</h1>
                <p> 
                    
                     Sumérgete en el mundo de las propiedades y descubre una experiencia 
                     única. Estamos aquí para asesorarte para cada <br>estilo de acuerdo a 
                     las necesidades. Explora nuestra colección <br>y haz que tu pasión por 
                     las propiedades se refleje en cada compra.
                    ¡Empecemos a triunfar juntos en la vida y fuera de él!
                </p>
                
            </div>
            <div class="header-img">
                <img src="images/oficina.jpg" alt="">
            </div>          
        </div>
    </header>


<div class="encontraras-content container">
    <div class="encontraras-txt">
        <h1>En nuestra inmobiliaria encontraras</h1>
        <p> 
            En REXHA, te ofrecemos una excelente calidad de propiedades 
            de la más alta calidad. Desde las propiedades más reconocidas 
            hasta los departamentos maravillosos, cada propiedad que 
            encuentres aquí ha sido elegido por su excelencia en 
            diseño, durabilidad y rendimiento. Estamos comprometidos 
            en brindarte solo lo mejor, para que puedas confiar en que 
            tu vitalidad te llevará al éxito en cada lugar. Descubre 
            la diferencia que la calidad hace en tu vida y únete con 
            los mejores en REXHA inmobiliaria. 
            <br>¡Prepárate para elevar tu experiencia vivencial al 
            siguiente nivel!
        </p>
    </div>
</div>
   
    <section class="oferts container">
        
        <div class="ofert-1 b1">
            <div class="ofert-txt">
                <h3>DEPARTAMENTOS</h3>
            </div>
            <div class="ofert-img">
                <img src="images/depa.png" alt="">
            </div>  
        </div>

        <div class="ofert-1 b2">
            <div class="ofert-txt">
                <h3>CASAS</h3>             
            </div>
            <div class="ofert-img">
                <img src="images/madera.jpg" alt="">
            </div>  
        </div>

        <div class="ofert-1 b3">
            <div class="ofert-txt">
                <h3>LOTES</h3>
            </div>
            <div class="ofert-img">
                <img src="images/lotes.jpg" alt="">
            </div>  
        </div>
    
    </section>

    
    <div class="search-container container">
    <h2>Buscar Propiedades</h2>
    
    <div class="search-section">
        <select id="property-type" class="form-select">
            <option value="">Selecciona una opción</option>
            <option value="alquilar">Alquilar</option>
            <option value="comprar">Comprar</option>
            <option value="proyectos">Proyectos</option>
        </select>
        
        <input type="text" id="location" class="form-input" placeholder="Ubicación o características...">
        
        <select id="department-type" class="form-select">
            <option value="">Tipo de departamento</option>
            <option value="1 dormitorio">1 Dormitorio</option>
            <option value="2 dormitorios">2 Dormitorios</option>
            <option value="3 dormitorios">3 Dormitorios</option>
        </select>
        
        <button id="search-button" class="btn-search">Buscar</button>
    </div>
</div>



   <main class="products container">

    <h2>ÚLTIMAS PROPIEDADES</h2>

    <div class="box-container" id="lista-1">

        <div class="box"> 
            <div class="property-id">ID: 1110359</div>  
            <img src="images/sanbartolo.jpg" alt="">
            <div class="product-txt">
                <h3>DEPARTAMENTO <br> EN ALQUILER </h3>
                <h3></h3>
                <p class="precio">S/. 2,256.00 <br> USD 600.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, San Bartolo</p>
                    <p>RUC: 12345678901</p>
            <div class="columns">
             <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
             </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
              </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
            </div>

            <style>
    .columns {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
    }
    .column {
        flex: 1;
        text-align: center;
        margin: 0 5px; /* Espacio entre columnas */
    }
</style>
                    
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/owner1.jpg" alt="Propietario 1">
            </div>
        </div>

        <div class="box">
        <div class="property-id">ID: 1110521</div>
            <img src="images/surco.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO <br> EN ALQUILER</h3>
                <h3></h3>
                    <p class="precio">S/. 3,500.00 <br> USD 930.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, Santiago de Surco</p>
                    <p>RUC: 12345678901</p>
             <div class="columns">
              <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
              </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
               </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
             </div>
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p1.jpg" alt="Propietario 1">
            </div>
        </div>

        <div class="box">  
            <div class="property-id">ID: 1110482</div>     
            <img src="images/miraflores.jpg" alt="producto-1">     
            <div class="product-txt">
                <h3>DEPARTAMENTO FLAT<br> EN ALQUILER</h3>
                <h3></h3>
                <p class="precio">S/. 4,512.00 <br> USD 1,200.00</p>
                <p><i class="fas fa-map-marker-alt"></i>Lima, Santiago de Surco</p>
                <p>RUC: 12345678901</p>
             <div class="columns">
              <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
              </div>
               <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
               </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
             </div>
                <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p2.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">
            <div class="property-id">ID: 1110564</div>     
            <img src="images/chorrillos.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO FLAT<br> EN ALQUILER </h3>
                <h3></h3>
                    <p class="precio">S/. 2,444.00 <br> USD 650.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, Chorrillos</p>
                    <p>RUC: 12345678901</p>
              <div class="columns">
                <div class="column">
                  <p>Empresa o vendedor:</p>
                  <p><small>CORPA S.A.C</small></p>
              </div>
              <div class="column">
                 <p>Área del terreno:</p>
                 <p><small>120 m²</small></p>
              </div>
                <div class="column">
                 <p>Área construida:</p>
                 <p><small>80 m²</small></p>
               </div>
              </div>
                    
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p4.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">
            <div class="property-id">ID: 1110484</div>  
            <img src="images/lince2.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO FLAT<br> EN ALQUILER </h3>
                <h3></h3>
                <p class="precio">S/. 4,324.00 <br> USD 1,150.00</p>
                    <p><i class="fas fa-map-marker-alt"></i> Lima, Lince</p>
                    <p>RUC: 12345678901</p>
            <div class="columns">
             <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
             </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
              </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
            </div>
                    
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p3.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">
        <div class="property-id">ID: 1110519</div>  
            <img src="images/santiago.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO <br> EN ALQUILER </h3>
                <h3></h3>
                    <p class="precio">S/. 3,500.00 <br> USD 930.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, Santiago de Surco</p>
                    <p>RUC: 12345678901</p>
            <div class="columns">
             <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
             </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
              </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
            </div>
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p5.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">
        <div class="property-id">ID: 1110471</div>  
            <img src="images/sami2.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO DUPLEX<br> EN ALQUILER </h3>
                <h3></h3>
                    <p class="precio">S/. 2,000.00 <br> USD 531.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, San Miguel</p>
                    <p>RUC: 12345678901</p>
            <div class="columns">
             <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
             </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
              </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
            </div>
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p6.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">   
            <div class="property-id">ID: 1110453</div>       
            <img src="images/losolivos.png" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO<br> EN ALQUILER </h3>
                <h3></h3>
                <p class="precio">S/. 15,792.00 <br> USD 4,200.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, Los Olivos</p>
                    <p>RUC: 12345678901</p>
            <div class="columns">
             <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
             </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
              </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
            </div>
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p7.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">
           <div class="property-id">ID: 1110352</div>       
            <img src="images/casa_urbana2.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>CASA URBANA<br> EN ALQUILER </h3>
                <h3></h3>
                   <p class="precio">S/. 9,400.00 <br> USD 2,500.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, San Isidro</p>
                    <p>RUC: 12345678901</p>
            <div class="columns">
             <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
             </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
              </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
            </div>
                    
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p8.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">
            <div class="property-id">ID: 1110308</div>       
            <img src="images/terro.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>TERRENO<br> EN ALQUILER </h3>
                <h3></h3>
                    <p class="precio">S/. 29,328.00 <br> USD 7,800.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, Lurigancho</p>
                    <p>RUC: 12345678901</p>
            <div class="columns">
             <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
             </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
              </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
            </div>
                    
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p9.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">
            <div class="property-id">ID: 1110471</div>       
            <img src="images/venta_duplex.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO DUPLEX<br> EN ALQUILER </h3>
                <h3></h3>
                    <p class="precio">S/. 2,000.00 <br> USD 531.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, San Miguel</p>
                    <p>RUC: 12345678901</p>
            <div class="columns">
             <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
             </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
              </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
            </div>
                    
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p10.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">
            <div class="property-id">ID: 1110465</div>       
            <img src="images/lindodepa.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO <br>EN ALQUILER </h3>
                <h3></h3>
                    <p class="precio">S/. 300.00 <br> USD 79.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, Santiago de Surco</p>
                    <p>RUC: 12345678901</p>
            <div class="columns">
             <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
             </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
              </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
            </div>
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p11.jpg" alt="Propietario 1">
            </div>
        </div>
      
    </div>
    
    <div class="btn-2" id="load-more"> Cargar Mas</div>
</main>

<section class="testimonial container">
    <h1>Testimonios</h1>
    <h2>Que opinan los nuestros clientes</h2>
    <div class="testimonial-content">
        <div class="testimonial-1">
            <h4>PIERO CASTILLO</h4>
            <p>La entrega rapida y segura, lo recomiendo
                a todo publico en general.
            </p>
            <img src="images/starts.png" alt="">
        </div>

        <div class="testimonial-1">
            <h4>JORGE BARBA</h4>
            <p>Desde que compramos nuestro departamento en Rexha nos hemos sentido muy felices, 
                las propiedades son de primera. 
            </p>
            <img src="images/starts.png" alt="">
        </div>

        <div class="testimonial-1">
            <h4>PILAR GASCA</h4>
            <p>La vida nos ha traido bendiciones desde que conocimos al gran equipo de Rexha. 
            </p>
            <img src="images/starts.png" alt="">
        </div>

        <div class="testimonial-1">
            <h4>BARBARA HERRERA</h4>
            <p>Les hablé a mis familiares sobre la inmobiliaria Rexha se quedaron impresionados, sin palabras por la cantidad 
                de propiedades que ofrece Rexha como inmobiliaria. 
            </p>
            <img src="images/starts.png" alt="">
        </div>

        <div class="testimonial-1">
            <h4>JOSE SANTAMARIA</h4>
            <p>Les hablé a mis familiares sobre la inmobiliaria Rexha se quedaron impresionados, sin palabras por la cantidad 
                de propiedades que ofrece Rexha como inmobiliaria. 
            </p>
            <img src="images/starts.png" alt="">
        </div>

        <div class="testimonial-1">
            <h4>PEDRO JIMENEZ</h4>
            <p>Les hablé a mis familiares sobre la inmobiliaria Rexha se quedaron impresionados, sin palabras por la cantidad 
                de propiedades que ofrece Rexha como inmobiliaria. 
            </p>
            <img src="images/starts.png" alt="">
        </div>

        
    </div>
</section>

<footer class="footer">
    <div class="footer-content container">
        <div class="link">
            <h3>Enlaces de Navegación</h3>
            <ul>
                <li><a href="nosotros.php">Acerca de</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="privacidad.php">Política de Privacidad</a></li>
                <li><a href="reclamos.php" target="_blank">Libro de Reclamos</a></li>
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
          <p style="color: black;">&copy; 2024 ZUMATE ONG. Todos los derechos reservados.</p>
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

<script>
   const stars = document.querySelectorAll('.star');

stars.forEach(function(star, index) {
    star.addEventListener('click', function() {
        // Limpiar todas las selecciones
        stars.forEach(s => s.classList.remove('checked'));

        // Añadir "checked" solo a la estrella clicada y a las anteriores
        for (let i = 0; i <= index; i++) {
            stars[i].classList.add('checked');
        }
    });

    star.addEventListener('mouseover', function() {
        // Resaltar estrellas en hover
        stars.forEach(s => s.classList.remove('checked'));
        for (let i = 0; i <= index; i++) {
            stars[i].classList.add('checked');
        }
    });

    star.addEventListener('mouseout', function() {
        // Mantener la selección actual
        const selectedStars = document.querySelectorAll('.star.checked');
        stars.forEach(s => s.classList.remove('checked'));
        selectedStars.forEach(s => s.classList.add('checked'));
    });
});
 </script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=51932779837&text=Hola%20sean%20bienvenidos,%20deseo%20conversar%20con%20el%20vendedor" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
    
</body>
</html> 