<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DODGE</title>
    <link rel="icon" type="image/png" href="{{asset('img/meca.png')}}">
    <link rel="stylesheet" href="{{asset('css/mantenimiento.css')}}">
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
            <h1>MANTENIMIENTO</h1>
            <p>
                Prevenir siempre sera mejor que lamentar.
            </p>
        </div>
        <img src="{{asset('img/mantenimiento.png')}}" alt="">
    </div>
</header>

<section class="porfolios container">
    <div class="porfolio">
        <div class="porfolio-1">
            <h3>¿Qué es el mantenimiento preventivo?</h3>
            <p>El mantenimiento preventivo consiste en una serie de inspecciones, ajustes y servicios regulares
                realizados a un vehículo con el propósito de mantenerlo en óptimas condiciones y prevenir fallas
                mecánicas. Este tipo de mantenimiento no solo mejora la seguridad y el desempeño del vehículo, sino
                que también alarga su vida útil y reduce costos a largo plazo.</p>
            <h3>¿Por qué es importante el mantenimiento preventivo?</h3>
            <p>1. Prevención de averías: Detecta y corrige problemas potenciales antes de que se conviertan en
                fallas
                graves.</p>
            <p>2. Mayor seguridad: Garantiza que los sistemas críticos, como frenos y dirección, funcionen
                adecuadamente.</p>
            <p>3. Ahorro económico: Evita reparaciones costosas derivadas de daños acumulativos.</p>
            <p>4. Eficiencia del combustible: Mantiene el motor y otros sistemas en condiciones óptimas, reduciendo
                el consumo de gasolina.</p>
            <p>5. Prolonga la vida útil del vehículo: Reduce el desgaste innecesario de componentes clave.</p>
            <h3>Servicios Incluidos en un Mantenimiento Preventivo</h3>
            <p>Cambio de Aceite y Filtros:</p>
            <p>• Reemplazo del aceite del motor para garantizar una correcta lubricación.</p>
            <p>• Sustitución de filtros de aceite, aire y combustible para evitar impurezas.</p>
            <p>Revisión de Frenos:</p>
            <p>• Inspección de discos, balatas y líquido de frenos.</p>
            <p>• Ajustes y reemplazo de componentes desgastados.</p>
            <!--  -->
            <p>Inspección y Ajuste del Sistema Eléctrico:</p>
            <p>• Comprobación de la batería, alternador y motor de arranque.</p>
            <p>• Verificación de luces y fusibles.</p>
            <!--  -->
            <p>Chequeo de Neumáticos:</p>
            <p>• Medición de la presión y el desgaste de las llantas.</p>
            <p>• Alineación y balanceo si es necesario.</p>
            <!--  -->
            <p>Revisión de Líquidos:</p>
            <p>• Verificación y reposición de líquido de frenos, refrigerante, líquido de dirección y
                limpiaparabrisas.</p>
            <p>Revisión de Suspensión y Dirección:</p>
            <p>• Inspección de amortiguadores, resortes y componentes de la dirección.</p>
            <p>Chequeo del Sistema de Escape:</p>
            <p>• Identificación de fugas o daños que puedan afectar el rendimiento.</p>
            <p>Diagnóstico Computarizado:</p>
            <p>• Escaneo del sistema para detectar errores o códigos de falla.</p>
            <!--  -->
            <h3>¿Cuándo Realizar un Mantenimiento Preventivo?</h3>
            <p>El mantenimiento preventivo debe realizarse de acuerdo con las recomendaciones del fabricante del
                vehículo, que generalmente se encuentran en el manual del propietario. Los intervalos más comunes
                son:</p>
            <p>• Cada 5,000 a 10,000 kilómetros para un cambio de aceite y revisión básica.</p>
            <p>• Cada 20,000 a 40,000 kilómetros para servicios más completos como cambio de filtros y revisión del
                sistema de frenos.</p>
            <p>• Cada 50,000 a 100,000 kilómetros para revisiones mayores como cambio de bujías o ajustes del
                sistema de suspensión.</p>
            <!--  -->
            <h3>¿Por qué Elegir Nuestro Taller?</h3>
            <p>En nuestro taller mecánico, contamos con:</p>
            <p>• Técnicos certificados con amplia experiencia.</p>
            <p>• Herramientas y equipos de diagnóstico de última generación.</p>
            <p>• Garantía en todos nuestros servicios.</p>
            <p>• Servicios personalizados según las necesidades de tu vehículo.</p>
            <img src="{{asset('img/2.png')}}" alt="">
        </div>
    </div>
</section>

<!--  -->
<div class="carousel">
    <div class="carousel-track">
        <img src="{{asset('mantenimiento/1.png')}}" alt="Imagen 1" class="carousel-img">
        <img src="{{asset('mantenimiento/2.png')}}" alt="Imagen 2" class="carousel-img">
        <img src="{{asset('mantenimiento/3.png')}}" alt="Imagen 3" class="carousel-img">
        <img src="{{asset('mantenimiento/4.png')}}" alt="Imagen 4" class="carousel-img">
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
