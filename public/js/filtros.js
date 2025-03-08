document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#calendar", {
        enableTime: false,
        dateFormat: "Y-m-d",
        defaultDate: new Date().toISOString().split('T')[0]
    });

    flatpickr("#dateRange", {
        mode: "range",
        dateFormat: "Y-m-d",
        defaultDate: [new Date().toISOString().split('T')[0], new Date().toISOString().split('T')[0]]
    });

    let charts = []; // Almacenar las instancias de las gráficas

    const labels = ['Enero', 'Febrero', 'Marzo', 'Abril'];
    const dataValues = [10, 20, 30, 40];

    const chartConfigs = [
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

    // Función para inicializar las gráficas
    function initializeCharts() {
        charts = chartConfigs.map(chart => {
            const ctx = document.getElementById(chart.id)?.getContext('2d');
            if (ctx) {
                return new Chart(ctx, {
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
            return null;
        });
    }

    // Inicializar las gráficas al cargar la página
    initializeCharts();

    // Función para actualizar las gráficas con nuevos datos
    function updateCharts(filters) {
        console.log("Filtros aplicados:", filters);
        // Aquí puedes agregar la lógica para actualizar los datos de las gráficas
        // Por ejemplo, puedes hacer una solicitud al servidor para obtener nuevos datos
        // y luego actualizar las gráficas con esos datos.

        // Ejemplo de actualización de datos (simulado):
        const newDataValues = [15, 25, 35, 45]; // Datos simulados filtrados
        charts.forEach(chart => {
            if (chart) {
                chart.data.datasets[0].data = newDataValues;
                chart.update(); // Actualizar la gráfica
            }
        });
    }

    // Manejar el envío del formulario de filtrado
    document.getElementById("filterForm").addEventListener("submit", function (event) {
        event.preventDefault();
        const formData = new FormData(event.target);
        const filters = Object.fromEntries(formData.entries());
        updateCharts(filters); // Actualizar las gráficas con los filtros
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
