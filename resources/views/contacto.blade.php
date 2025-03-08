<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DODGE</title>
    <link rel="icon" type="image/png" href="{{asset('img/meca.png')}}">
    <link rel="stylesheet" href="{{asset('css/contacto.css')}}">
    <link rel="stylesheet" href="{{asset('css/nosotros.css')}}">
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
            </ul>
        </nav>
    </div>

    <div class="header-content container">
        <div class="content">
            <h1>¡COMUNICATE CON NOSOTROS</h1>
            <p>
                Estamos para atenderte.
            </p>
            <a href="#" class="btn-1">Más Información</a>
        </div>
        <img src="{{asset('img/meca.png')}}" alt="">
    </div>
</header>

<section class="about-us container">
    <div class="about-content">
        <h2>Acerca de Nosotros</h2>
        <p>En nuestro taller mecánico, nos enorgullece ofrecer un servicio confiable y de alta calidad para mantener
            su vehículo en excelente estado. Contamos con un equipo de expertos dedicados que trabajan con las
            últimas tecnologías para diagnosticar, reparar y mantener su automóvil de manera eficiente.</p>

        <h3>Redes Sociales</h3>
        <ul class="social-links">
            <li><a href="https://www.facebook.com/?locale=es_LA"><i class="fab fa-facebook"></i> Facebook</a></li>
            <li><a href="https://www.instagram.com/"><i class="fab fa-twitter"></i> Instagram</a></li>
            <li><a href="#"><i class="https://www.tiktok.com/es/"></i> Tik Tok</a></li>
        </ul>

        <h3>Contacto</h3>
        <ul class="contact-info">
            <li><i class="fas fa-phone"></i> Teléfono: +52 961 462 2203</li>
            <li><i class="fas fa-envelope"></i> Correo: dodge@tallermecanico.com</li>
            <li><i class="fas fa-map-marker-alt"></i> Dirección: KM 29020, Carr. Panamericana 1080, Boulevares,
                29050 Tuxtla Gutiérrez, Chis.</li>
        </ul>
    </div>
</section>

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

                <div class="info-txt">
                    <h2>Conoce más</h2>
                    <p>
                        Para nosotros la historia también es importante.
                    </p>
                </div>
            </div>
            <hr>
            <div class="enlaces">
                <h3>DODGE</h3>
            </div>
        </div>
    </div>
</footer>
</body>

</html>
