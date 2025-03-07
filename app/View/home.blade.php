
    <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DODGE</title>
    <link rel="icon" type="image/png" href="{{asset('img/meca.png')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
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
                <li><a href="index.html">Inicio</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="CRM.html">Contacto</a></li>
            </ul>
        </nav>
    </div>

    <div class="header-content container">
        <div class="content">
            <h1>DODGE</h1>
            <p>
                “Soluciones autenticas a vehiculos autenticos”.
            </p>
            <a href="servicios.html" class="btn-1">¡Haz tu carrito aquí!</a>
        </div>
        <img src="{{'img/meca2.png'}}" alt="">
    </div>
</header>

<main class="services container">

    <div class="service">
        <img src="{{asset('img/diagnostico.png')}}" alt="">
        <h3>Diagnóstico Profesional</h3>
        <p>Realizamos un análisis completo y preciso de tu vehículo para identificar cualquier problema con rapidez
            y eficacia.</p>
    </div>

    <div class="service">
        <img src="{{asset('img/reparacion.png')}}" alt="">
        <h3>Reparaciones de Calidad</h3>
        <p>Ofrecemos soluciones integrales, desde motores hasta sistemas eléctricos, garantizando resultados
            duraderos.</p>
    </div>

    <div class="service">
        <img src="{{asset('img/compromiso.png')}}" alt="">
        <h3>Compromiso con la Seguridad</h3>
        <p>Trabajamos con estándares estrictos para asegurar que tu vehículo esté en óptimas condiciones para tu
            tranquilidad.</p>
    </div>

    <div class="service">
        <img src="{{asset('img/servicio.png')}}" alt="">
        <h3>Servicio Limpio</h3>
        <p>Contamos con asistencia para llevar tu auto al taller o realizar reparaciones básicas directamente en tu
            ubicación.</p>
    </div>

</main>

<section class="porfolios container">
    <h2>Catálogo</h2>
    <div class="porfolio">
        <img src="{{'img/freno.png'}}" alt="">
        <div class="porfolio-1">
            <h3>Reparación de Frenos</h3>
            <p>Garantizamos tu seguridad revisando, ajustando o reemplazando componentes clave del sistema de frenos
                para un desempeño óptimo en cualquier situación.</p>
            <a href="frenos.html" class="btn-2">Más Información</a>
        </div>
    </div>

    <div class="porfolio">
        <div class="porfolio-2">
            <h3>Mantenimiento Preventivo</h3>
            <p>Realizamos servicios periódicos como cambios de aceite, revisión de filtros y ajustes esenciales para
                mantener tu vehículo en perfecto estado y evitar averías mayores.</p>
            <a href="mantenimiento.html" class="btn-2">Más Información</a>
        </div>
        <img src="{{asset('img/mantenimiento.png')}}" alt="">
    </div>

    <div class="porfolio">
        <img src="{{asset('img/motores.png')}}" alt="">
        <div class="porfolio-1">
            <h3>Reparación de Motores y Transmisiones</h3>
            <p>Ofrecemos diagnóstico especializado y reparaciones completas para motores y transmisiones, asegurando
                potencia, eficiencia y durabilidad en tu vehículo.</p>
            <a href="motor.html" class="btn-2">Más Información</a>
        </div>
    </div>

    <div class="porfolio">
        <div class="porfolio-2">
            <h3>Servicios de Aire Acondicionado</h3>
            <p>Revisamos, recargamos y reparamos sistemas de aire acondicionado, brindándote comodidad en tus
                trayectos y un ambiente fresco en cualquier temporada.</p>
            <a href="ac.html" class="btn-2">Más Información</a>
        </div>
        <img src="{{asset('img/ac.png')}}" alt="">
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
                    <h2>Inicia sesión</h2>
                    <p>
                        Registrate:
                    </p>
                    <a href="login.html" class="btn-1">Iniciar Sesión</a>
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
</body>

</html>
