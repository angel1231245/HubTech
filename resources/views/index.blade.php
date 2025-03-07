<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Librerías JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

<!-- 📌 Botón del menú (solo en móviles) -->
<button id="menu-toggle" class="menu-button">
    <i class="fas fa-bars"></i>
</button>

<!-- 📌 Sidebar -->
<div class="sidebar">
    <div class="sidebar-header">
        <h2>Dashboard</h2>
    </div>
    <ul class="sidebar-menu">
        <li><a href="#"><i class="fas fa-chart-line"></i> Reportes</a></li>
        <li><a href="#"><i class="fas fa-shopping-cart"></i> Ventas</a></li>
        <li><a href="#"><i class="fas fa-users"></i> Clientes</a></li>
        <li><a href="#"><i class="fas fa-boxes"></i> Inventario</a></li>
        <li><a href="#"><i class="fas fa-cogs"></i> Configuración</a></li>
    </ul>
</div>

<!-- 📌 Contenido Principal -->
<div class="main-content">

    <!-- 🔹 Header con título y calendario -->
    <header class="header">
        <h1>HubTech</h1>
        <div class="calendar-container">
            <input type="text" id="calendar" class="calendar-input" placeholder="Selecciona una fecha">
        </div>
    </header>

    <!-- 🔹 Sección de Gráficos -->
    <section class="charts">
        <div class="chart-container">
            <h3>Ventas Mensuales</h3>
            <canvas id="salesChart"></canvas>
        </div>
        <div class="chart-container">
            <h3>Reporte de Ventas Semanal</h3>
            <canvas id="weeklySalesPie"></canvas>
        </div>
        <div class="chart-container">
            <h3>Avance Diario</h3>
            <canvas id="dailyProgressLine"></canvas>
        </div>
    </section>

    <!-- 🔹 Línea de Tiempo -->
    <section class="timeline">
        <h2>Historial de Ventas</h2>
        <div class="timeline-container">
            <div class="timeline-item">
                <div class="timeline-icon"><i class="fas fa-dollar-sign"></i></div>
                <div class="timeline-content">
                    <h3>Venta realizada</h3>
                    <p>Se vendieron 5 productos - 10:30 AM</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-icon"><i class="fas fa-user"></i></div>
                <div class="timeline-content">
                    <h3>Nuevo Cliente</h3>
                    <p>Juan Pérez se registró - 11:00 AM</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-icon"><i class="fas fa-truck"></i></div>
                <div class="timeline-content">
                    <h3>Envío realizado</h3>
                    <p>Orden #1234 enviada - 12:15 PM</p>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- 📌 Cargar JS -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- 📌 Script para Sidebar, Calendario y Gráficos -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Inicializar Flatpickr para mejorar la selección de fecha
        flatpickr("#calendar", {
            enableTime: false,
            dateFormat: "Y-m-d",
            defaultDate: new Date(),
            onChange: function (selectedDates, dateStr, instance) {
                alert("Cargando datos para: " + dateStr);
            }
        });

        // Botón para mostrar/ocultar Sidebar en móviles
        const menuButton = document.getElementById("menu-toggle");
        const sidebar = document.querySelector(".sidebar");

        menuButton.addEventListener("click", function () {
            sidebar.classList.toggle("active");
        });

        // Inicializar gráficos
        const ctxBar = document.getElementById('salesChart').getContext('2d');
        const ctxPie = document.getElementById('weeklySalesPie').getContext('2d');
        const ctxLine = document.getElementById('dailyProgressLine').getContext('2d');

        new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Ventas',
                    data: [1200, 1400, 1600, 1800, 2200],
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {responsive: true, scales: {y: {beginAtZero: true}}}
        });

        new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'],
                datasets: [{
                    data: [30, 20, 15, 25, 10],
                    backgroundColor: ['#E74C3C', '#3498DB', '#F1C40F', '#2ECC71', '#9B59B6']
                }]
            },
            options: {responsive: true}
        });

        new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: ['Día 1', 'Día 2', 'Día 3', 'Día 4', 'Día 5'],
                datasets: [{
                    label: 'Avance Diario',
                    data: [10, 30, 50, 70, 100],
                    borderColor: '#E67E22',
                    fill: false
                }]
            },
            options: {responsive: true}
        });
    });
</script>

</body>
</html>
