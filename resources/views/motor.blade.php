<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DODGE</title>
    <link rel="icon" type="image/png" href="{{asset('img/meca.png')}}">
    <link rel="stylesheet" href="{{asset('css/motor.css')}}">
    <link rel="stylesheet" href="{{asset('css/carrusel.css')}}">
</head>

<body>

<header>

    <div class="menu container">
        <a href="#" class="logo">Servicio Automotriz</a>
        <input type="checkbox" id="menu">
        <label for="menu">
            <img src="{{asset('img/menu-btn.png')}}" class="menu-icono" alt="">
        </label>

        <nav class="navbar">
            <ul>
                <li><a href="{{asset('index.html')}}">Inicio</a></li>
                <li><a href="{{asset('servicios.html')}}">Servicios</a></li>
                <li><a href="{{asset('contacto.html')}}">Contacto</a></li>
            </ul>
        </nav>
    </div>

    <div class="header-content container">
        <div class="content">
            <h1>MOTORES Y TRANSMICIONES</h1>
            <p>
                Quedaté tranquilo, nosotros solucionamos.
            </p>
        </div>
        <img src="{{asset('img/motores.png')}}" alt="">
    </div>
</header>

<section class="porfolios container">
    <div class="porfolio">
        <div class="porfolio-1">
            <h3>¿Qué es la Reparación de Motores y Transmisiones?</h3>
            <p>La reparación de motores y transmisiones es uno de los servicios más complejos y fundamentales en el
                mantenimiento automotriz. Ambos sistemas son el corazón de tu vehículo: el motor proporciona la
                energía necesaria para moverse, mientras que la transmisión se encarga de transferir esa potencia a
                las ruedas de manera eficiente. Si alguno de estos componentes falla, el desempeño del vehículo
                puede verse gravemente afectado, e incluso podría dejar de funcionar por completo. </p>

            <h3>¿Por qué es Importante Reparar el Motor y la Transmisión a Tiempo?</h3>
            <p>Evitar daños mayores: Los problemas en el motor o la transmisión pueden empeorar con el tiempo,
                provocando fallas más costosas de reparar.</p>
            <p>Mejorar la seguridad: Un vehículo con un motor o transmisión defectuosos puede ser peligroso para ti
                y para otros conductores.</p>
            <p>Eficiencia en el combustible: Reparar problemas a tiempo garantiza un consumo óptimo de gasolina.</p>
            <p>Prolongar la vida útil del vehículo: Mantener estos componentes en buen estado evita un desgaste
                prematuro.</p>

            <h3>Servicios que Ofrecemos en Reparación de Motores</h3>
            <p>En nuestro taller, contamos con personal altamente capacitado y equipo especializado para
                diagnosticar y reparar problemas en el motor. Entre los servicios que ofrecemos están:</p>
            <p>1. Diagnóstico Computarizado del Motor</p>
            <p> • Utilizamos herramientas avanzadas para identificar problemas en sensores, válvulas, bobinas y
                otros componentes electrónicos.</p>
            <p>2. Reparación de Fugas</p>
            <p> • Inspeccionamos y reparamos fugas de aceite o refrigerante, que pueden dañar el motor si no se
                atienden.</p>
            <p>3. Rectificación de Componentes Internos</p>
            <p> • Reparación o sustitución de pistones, anillos, cilindros y válvulas dañadas para restaurar el
                rendimiento del motor.</p>
            <!--  -->
            <p>4. Cambio de Cadena o Banda de Distribución</p>
            <p> • Sustitución de estos componentes esenciales para evitar problemas mayores en el motor.
            </p>
            <p>5. Reparación del Sistema de Enfriamiento
            </p>
            <p> • Mantenimiento del radiador, termostato y bomba de agua para prevenir el sobrecalentamiento del
                motor.
            </p>
            <p>6. Reconstrucción Total del Motor
            </p>
            <p> • Desmontamos, limpiamos, inspeccionamos y reconstruimos el motor cuando es necesario, utilizando
                piezas originales o de alta calidad.
            </p>
            <!--  -->
            <p>Contáctanos</p>
            <p>Si sospechas que tu motor o transmisión tienen problemas, no esperes a que se agraven. Llámanos o
                visítanos para una inspección detallada.</p>
            <p>¡Confía en nosotros para mantener tu vehículo en las mejores condiciones!</p>
            <img src="{{asset('img/3.png')}}" alt="">
        </div>
    </div>
</section>

<!--  -->
<div class="carousel">
    <div class="carousel-track">
        <img src="{{asset('motores/1.png')}}" alt="Imagen 1" class="carousel-img">
        <img src="{{asset('motores/2.png')}}" alt="Imagen 2" class="carousel-img">
        <img src="{{asset('motores/2.png')}}" alt="Imagen 3" class="carousel-img">
        <img src="{{asset('motores/4.png')}}" alt="Imagen 4" class="carousel-img">
    </div>
</div>
<!--  -->

<footer>
    <div class="container">
        <div class="info">
            <div class="info-content">
                <div class="info-price">
                    <h2>Métodos de pago</h2>
                    <p class="price">En los detalles esta la mejora</p>
                    <p>Aceptamos pagos en linea con tarjetas de credito y debito; pagos contraentrega después de
                        recibir el vehiculo con un anticipo del 50%.
                    </p>
                </div>
            </div>
            <hr>
            <div class="enlaces">
                <h3>DODGE</h3>
                <div class="enlace">
                    <li><a href="https://www.facebook.com/?locale=es_LA">Facebook</a></li>
                    <li><a href="https://www.instagram.com/">Instagram</a></li>
                    <li><a href="https://www.tiktok.com/es/">Tik Tok</a></li>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('js/carrusel.js')}}"></script>
</body>

</html>
