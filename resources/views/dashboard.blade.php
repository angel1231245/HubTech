<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hub Tech') }}
        </h2>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" href="{{ asset('css/filtros.css') }}">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                <div class="main-content">
                    <!-- Filtro de selección -->
                    <div class="filter-container mb-6">
                        <form id="filterForm" class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
                            <div>
                                <label for="dateRange">Rango de Fechas</label>
                                <input type="text" id="dateRange" name="dateRange" placeholder="Selecciona un rango">
                            </div>
                            <div>
                                <label for="category">Categoría</label>
                                <select id="category" name="category">
                                    <option value="1">Mantenimiento</option>
                                    <option value="2">Aire Acondicionado</option>
                                    <option value="3">Frenos</option>
                                </select>
                            </div>
                            <div class="md:col-span-5">
                                <button type="submit" id="filterButton">Filtrar</button>
                            </div>
                        </form>
                    </div>

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
    <script src="{{ asset('js/filtros.js') }}" defer></script>
</x-app-layout>
