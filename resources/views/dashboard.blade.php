<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <style>
            .calendar-input {
                color: #0048ff !important;
            }

            .flatpickr-calendar {
                color: #ff00a1 !important;
            }

            .flatpickr-day {
                color: #FFFFFF !important;
            }

            .flatpickr-day.selected {
                background: #FF4500 !important;
                color: #FFFFFF !important;
            }

            .download-btn {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-bottom: 20px;
            }

            .download-btn:hover {
                background-color: #45a049;
            }
        </style>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                <div class="main-content">
                    <header class="header flex flex-col md:flex-row justify-between items-center mb-6">
                        <h1 class="text-3xl font-bold text-gray-200">Calendario</h1>
                        <div class="calendar-container mt-4 md:mt-0">
                            <input type="text" id="calendar" class="calendar-input p-2 rounded bg-gray-700 text-white"
                                   placeholder="Selecciona una fecha">
                        </div>
                    </header>

                    <button id="downloadReport" class="download-btn">📄 Descargar Reporte</button>

                    <section id="chartSection" class="charts grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="chart-container p-4 bg-gray-700 rounded-lg">
                            <h3 class="text-lg text-white mb-2">Barra</h3>
                            <canvas id="barChart"></canvas>
                        </div>
                        <div class="chart-container p-4 bg-gray-700 rounded-lg">
                            <h3 class="text-lg text-white mb-2">Línea</h3>
                            <canvas id="lineChart"></canvas>
                        </div>
                        <div class="chart-container p-4 bg-gray-700 rounded-lg">
                            <h3 class="text-lg text-white mb-2">Radar</h3>
                            <canvas id="radarChart"></canvas>
                        </div>
                        <div class="chart-container p-4 bg-gray-700 rounded-lg">
                            <h3 class="text-lg text-white mb-2">Dona</h3>
                            <canvas id="doughnutChart"></canvas>
                        </div>
                        <div class="chart-container p-4 bg-gray-700 rounded-lg">
                            <h3 class="text-lg text-white mb-2">Pastel</h3>
                            <canvas id="pieChart"></canvas>
                        </div>
                        <div class="chart-container p-4 bg-gray-700 rounded-lg">
                            <h3 class="text-lg text-white mb-2">Burbuja</h3>
                            <canvas id="bubbleChart"></canvas>
                        </div>
                        <div class="chart-container p-4 bg-gray-700 rounded-lg">
                            <h3 class="text-lg text-white mb-2">Dispersión</h3>
                            <canvas id="scatterChart"></canvas>
                        </div>
                        <div class="chart-container p-4 bg-gray-700 rounded-lg">
                            <h3 class="text-lg text-white mb-2">Área Polar</h3>
                            <canvas id="polarChart"></canvas>
                        </div>
                        <div class="chart-container p-4 bg-gray-700 rounded-lg">
                            <h3 class="text-lg text-white mb-2">Barra Apilada</h3>
                            <canvas id="stackedBarChart"></canvas>
                        </div>
                        <div class="chart-container p-4 bg-gray-700 rounded-lg">
                            <h3 class="text-lg text-white mb-2">Línea con Relleno</h3>
                            <canvas id="filledLineChart"></canvas>
                        </div>
                        <div class="chart-container p-4 bg-gray-700 rounded-lg">
                            <h3 class="text-lg text-white mb-2">Mixto</h3>
                            <canvas id="mixedChart"></canvas>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            flatpickr("#calendar", {
                enableTime: false,
                dateFormat: "Y-m-d",
                defaultDate: new Date().toISOString().split('T')[0]
            });

            const labels = ['Enero', 'Febrero', 'Marzo', 'Abril'];
            const dataValues = [10, 20, 30, 40];

            const charts = [
                {id: 'barChart', type: 'bar'},
                {id: 'lineChart', type: 'line'},
                {id: 'radarChart', type: 'radar'},
                {id: 'doughnutChart', type: 'doughnut'},
                {id: 'pieChart', type: 'pie'},
                {id: 'polarChart', type: 'polarArea'},
                {id: 'stackedBarChart', type: 'bar', options: {scales: {x: {stacked: true}, y: {stacked: true}}}},
                {id: 'filledLineChart', type: 'line', options: {elements: {line: {tension: 0.4, fill: true}}}},
                {
                    id: 'mixedChart',
                    type: 'bar',
                    data: {
                        labels,
                        datasets: [
                            {type: 'bar', label: 'Barras', data: dataValues, backgroundColor: 'blue'},
                            {type: 'line', label: 'Línea', data: dataValues, borderColor: 'red', fill: false}
                        ]
                    }
                },
                {
                    id: 'bubbleChart',
                    type: 'bubble',
                    data: {
                        datasets: [{
                            label: 'Burbujas',
                            data: [{x: 10, y: 15, r: 10}, {x: 20, y: 10, r: 20}],
                            backgroundColor: 'purple'
                        }]
                    }
                },
                {
                    id: 'scatterChart',
                    type: 'scatter',
                    data: {
                        datasets: [{
                            label: 'Dispersión',
                            data: [{x: 1, y: 2}, {x: 3, y: 4}, {x: 5, y: 6}],
                            borderColor: 'green',
                            backgroundColor: 'lightgreen'
                        }]
                    }
                }
            ];

            charts.forEach(chart => {
                const ctx = document.getElementById(chart.id)?.getContext('2d');
                if (ctx) {
                    new Chart(ctx, {
                        type: chart.type,
                        data: chart.data || {
                            labels,
                            datasets: [{
                                label: chart.id,
                                data: dataValues,
                                backgroundColor: ['red', 'blue', 'green', 'yellow']
                            }]
                        },
                        options: chart.options || {}
                    });
                }
            });

            document.getElementById("downloadReport").addEventListener("click", function () {
                html2canvas(document.querySelector("#chartSection")).then(canvas => {
                    const doc = new jspdf.jsPDF();

                    // 📝 Configurar fuente
                    doc.setFont("helvetica", "bold");

                    // 📌 Título del Reporte
                    doc.text("Reporte de Ventas", 15, 20);
                    doc.setFontSize(12);
                    doc.setFont("helvetica", "normal");

                    // 📊 Datos Resumidos de las Gráficas
                    let resumen = `
        - Ventas en Enero: 10 unidades
        - Ventas en Febrero: 20 unidades
        - Ventas en Marzo: 30 unidades
        - Ventas en Abril: 40 unidades
        - Producto más vendido: Producto B (45%)
        - Promedio de ventas diarias: 25 unidades
        `;

                    // 🖋️ Agregar texto al PDF
                    let yPosition = 30;
                    resumen.split("\n").forEach(line => {
                        doc.text(line.trim(), 15, yPosition);
                        yPosition += 8;
                    });

                    // 📷 Insertar la imagen de los gráficos
                    const imgData = canvas.toDataURL("image/png");
                    doc.addImage(imgData, 'PNG', 10, yPosition + 10, 190, (canvas.height * 190) / canvas.width);

                    // 💾 Guardar el archivo
                    doc.save("Reporte_Ventas.pdf");
                });
            });

        });
    </script>
</x-app-layout>
