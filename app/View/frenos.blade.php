<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DODGE</title>
    <link rel="icon" type="image/png" href="{{asset('img/meca.png')}}">
    <link rel="stylesheet" href="{{asset('css/freno.css')}}">
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
            <h1>FRENOS</h1>
            <p>
                Reparación ideal a tus frenos.
            </p>
        </div>
        <img src="{{asset('img/freno.png')}}" alt="">
    </div>
</header>

<section class="porfolios container">
    <div class="porfolio">
        <div class="porfolio-1">
            <h3>¿Por qué es importante el sistema de frenos?</h3>
            <p>El sistema de frenos es uno de los componentes más importantes para la seguridad de tu vehículo.
            <p>Su buen funcionamiento no solo protege a los ocupantes del automóvil, sino también a los peatones y
                otros conductores en la carretera.</p>
            <p>Unos frenos en mal estado pueden provocar accidentes graves
                debido a la pérdida de control al momento de detener el vehículo.</p>
            <h3>Servicios que Ofrecemos en Reparación de Frenos</h3>
            <p>En nuestro taller mecánico, contamos con un equipo especializado y herramientas de última generación
                para garantizar que tu sistema de frenos funcione de manera óptima. Nuestros servicios incluyen:

            <p>• Inspección Completa del Sistema de Frenos
                Revisamos todas las partes del sistema, incluyendo discos, balatas, tambores, líquido de frenos y
                sensores. Identificamos desgastes, fugas o daños que puedan afectar el rendimiento.</p>

            <p>• Cambio de Balatas y Pastillas de Freno
                Sustituimos las balatas y pastillas desgastadas por materiales de alta calidad que aseguren una
                frenada eficiente y duradera.</p>

            <p>• Reparación o Sustitución de Discos y Tambores
                Rectificamos discos y tambores si presentan deformaciones menores o los reemplazamos en caso de
                daños severos.</p>

            <p>• Sangrado y Cambio de Líquido de Frenos
                Reemplazamos el líquido de frenos viejo por uno nuevo y realizamos un sangrado adecuado para evitar
                la entrada de aire al sistema.</p>

            <p>• Reparación de Fugas
                Solucionamos fugas en las líneas de freno, cilindros o mangueras que puedan comprometer la presión y
                el desempeño del sistema.</p>

            <p>• Revisión y Reparación del Sistema ABS
                Si tu vehículo cuenta con frenos ABS, ofrecemos diagnóstico y reparación de sensores, módulos y
                otros componentes relacionados.</p>
            <h3>¿Cómo Saber si Necesitas Reparar los Frenos?</h3>
            <p>Algunos signos de advertencia que indican problemas en el sistema de frenos incluyen:</p>

            <p>1. Ruidos inusuales como chirridos o rechinidos al frenar.</p>
            <p>2. Vibración en el pedal del freno al aplicar presión.</p>
            <p>3. Distancia de frenado más larga de lo normal.</p>
            <p>4. Pedal del freno más suave o más duro de lo habitual.</p>
            <p>5. Encendido del indicador de frenos en el tablero.</p>
            <p>6. Si experimentas alguno de estos problemas, te recomendamos traer tu vehículo para una inspección
                inmediata.</p>
            <h3>Contáctanos</h3>
            <p>Si deseas más información o necesitas reparar tus frenos, no dudes en ponerte en contacto con
                nosotros. ¡Tu seguridad es nuestra prioridad!</p>
            <img src="{{asset('img/1.png')}}" alt="">
        </div>
    </div>
</section>

<!--  -->
<div class="carousel">
    <div class="carousel-track">
        <img src="{{asset('frenos/1.png')}}" alt="Imagen 1" class="carousel-img">
        <img src="{{asset('frenos/2.png')}}" alt="Imagen 2" class="carousel-img">
        <img src="{{asset('frenos/3.png')}}" alt="Imagen 3" class="carousel-img">
        <img src="{{asset('frenos/4.png')}}" alt="Imagen 4" class="carousel-img">
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
