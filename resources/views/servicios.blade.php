<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DODGE</title>
    <link rel="icon" type="image/png" href="{{asset('img/meca.png')}}">
    <link rel="stylesheet" href="{{asset('css/servicios.css')}}">
    <link rel="stylesheet" href="{{asset('css/serv.css')}}">
    <link rel="stylesheet" href="{{asset('css/modal.css')}}">
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
                <li><a href="{{asset('home.html')}}">Inicio</a></li>
                <li><a href="{{asset('contacto.html')}}">Contacto</a></li>
            </ul>
        </nav>
        <!-- Botón del carrito -->
        <div class="carrito-container">
            <img src="{{asset('img/carritoo.png')}}" alt="Carrito de compras" class="carrito-btn"
                 onclick="location.href='https://buy.stripe.com/aEU01g8QkeP41ocfZa';">
        </div>

    </div>
    <div class="header-content container">
        <div class="content">
            <h1>¡COMUNICATE CON NOSOTROS!</h1>
            <p>Estamos para atenderte.</p>
        </div>
        <img src="{{asset('img/meca.png')}}" alt="">
    </div>
</header>

<section>
    <div id="avion-animation"></div>
    <div class="container">
        <h2>Nuestros Servicios</h2>
        <div class="services">
            <div class="service">
                <img src="{{asset('img/ac.png')}}" alt="Mantenimiento de Aire Acondicionado">
                <h3>Reparación de Aire Acondicionado</h3>
                <p>Realizamos servicios de limpieza, recarga de gas, y revisión de componentes para garantizar un
                    aire acondicionado eficiente.</p>
                <p class="price">$2500 MXN</p>=
                <button class="btn-agregar" onclick="agregarAlCarrito(this)"
                        data-servicio="Reparación de Aire Acondicionado">Agregar al carrito</button>
            </div>
            <div class="service">
                <img src="{{asset('img/mantenimiento.png')}}" alt="Cambio de Aceite y Filtros">
                <h3>Mantenimiento Preventivo</h3>
                <p>Mantén tu motor funcionando suavemente con nuestros cambios de aceite y filtros periódicos.</p>
                <p class="price">$2000 MXN</p>
                <button class="btn-agregar" onclick="agregarAlCarrito(this)"
                        data-servicio="Mantenimiento Preventivo">Agregar al carrito</button>
            </div>
            <div class="service">
                <img src="{{asset('img/freno.png')}}" alt="Reparación de Transmisiones">
                <h3>Reparación de Frenos</h3>
                <p>Ofrecemos reparación de transmisiones automáticas y manuales con piezas de calidad y garantía.
                </p>
                <p class="price">$500 MXN</p>
                <button class="btn-agregar" onclick="agregarAlCarrito(this)"
                        data-servicio="Reparación de Frenos">Agregar al carrito</button>
            </div>
            <div class="service">
                <img src="{{asset('img/motores.png')}}" alt="Reparación de Motores">
                <h3>Reparación de Motores y Transmisiones</h3>
                <p>Nuestro equipo de mecánicos especializados realiza diagnósticos y reparaciones de motores a
                    precios accesibles.</p>
                <p class="price">$15000 MXN</p>
                <button class="btn-agregar" onclick="agregarAlCarrito(this)"
                        data-servicio="Reparación de Motores y Transmisiones">Agregar al carrito</button>
            </div>
            <div class="service">
                <img src="img/1.png" alt="Reparación de Motores">
                <h3>Servicio Eléctrico</h3>
                <p>Revisión y reparación del sistema eléctrico del vehículo, incluyendo luces, fusibles, alternador
                    y cableado general.</p>
                <p class="price">$800 MXN</p>
                <button class="btn-agregar" onclick="agregarAlCarrito(this)"
                        data-servicio="Reparación de Motores y Transmisiones">Agregar al carrito</button>
            </div>
            <div class="service">
                <img src="{{asset('img/2.png')}}" alt="Reparación de Motores">
                <h3>Cambio de Neumáticos</h3>
                <p>Desmontaje, instalación y balanceo de neumáticos nuevos, asegurando un manejo seguro y eficiente.
                </p>
                <p class="price">$2000 MXN</p>
                <button class="btn-agregar" onclick="agregarAlCarrito(this)"
                        data-servicio="Mantenimiento Preventivo">Agregar al carrito</button>
            </div>
            <div class="service">
                <img src="{{asset('img/3.png')}}" alt="Reparación de Motores">
                <h3>Alineación</h3>
                <p>Ajuste de la suspensión para garantizar que las ruedas estén perfectamente alineadas, reduciendo
                    el desgaste y mejorando la estabilidad.</p>
                <p class="price">$2000 MXN</p>
                <button class="btn-agregar" onclick="agregarAlCarrito(this)"
                        data-servicio="Mantenimiento Preventivo">Agregar al carrito</button>
            </div>
            <div class="service">
                <img src="{{asset('img/4.png')}}" alt="Reparación de Motores">
                <h3>Limpieza y Mantenimiento Estético</h3>
                <p>Lavado profundo, pulido, encerado y limpieza interior para mantener el vehículo impecable y
                    protegido.</p>
                <p class="price">$2000 MXN</p>
                <button class="btn-agregar" onclick="agregarAlCarrito(this)"
                        data-servicio="Mantenimiento Preventivo">Agregar al carrito</button>
            </div>
            <div class="service">
                <img src="{{asset('img/5.png')}}" alt="Reparación de Motores">
                <h3>Cambio de Batería</h3>
                <p>Sustitución profesional de la batería, asegurando la correcta instalación y disposición del
                    equipo viejo.</p>
                <p class="price">$500 MXN</p>
                <button class="btn-agregar" onclick="agregarAlCarrito(this)"
                        data-servicio="Reparación de Frenos">Agregar al carrito</button>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="info">
            <div class="info-content">
                <div class="info-price">
                    <h2>Métodos de pago</h2>
                    <p>Aceptamos pagos en línea con tarjetas de crédito y débito; pagos contra entrega después de
                        recibir el vehículo con un anticipo del 50%.</p>
                </div>
                <div class="info-txt">
                    <h2>Conoce más</h2>
                    <p>Para nosotros la historia también es importante.</p>
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

<div class="modal" id="modalCarrito">
    <div class="modal-content">
        <h2>Carrito de Compras</h2>
        <p id="mensajeModal"></p>
        <div id="descripcionModal"></div>
        <form id="formCarrito" action="{{asset('carrito1.html')}}" method="POST">
            <input type="hidden" name="productos" id="productosInput">
            <input type="hidden" name="total" id="totalInput">
            <button type="submit">Guardar Carrito</button>
            <button type="button" onclick="cerrarModal()">Cerrar</button>
        </form>
    </div>
</div>
</body>

</html>
