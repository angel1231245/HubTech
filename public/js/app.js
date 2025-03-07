// ===== Configuración de datos simulados =====
const salesData = {
    '2025-03-07': {
        categories: ['Electrónica', 'Ropa', 'Alimentos'],
        values: [1200, 900, 800],
        dailySales: [200, 400, 500, 700, 900, 1000, 1100],
    },
    '2025-03-06': {
        categories: ['Electrónica', 'Ropa', 'Alimentos'],
        values: [1400, 1100, 950],
        dailySales: [300, 450, 600, 850, 950, 1200, 1300],
    },
};

// Variables para almacenar los gráficos
let barChart = null;
let pieChart = null;
let lineChart = null;

// Función para generar datos aleatorios si la fecha no existe
function generateRandomData() {
    return {
        categories: ['Electrónica', 'Ropa', 'Alimentos'],
        values: Array.from({ length: 3 }, () => Math.floor(Math.random() * 2000)),
        dailySales: Array.from({ length: 7 }, () => Math.floor(Math.random() * 1500)),
    };
}

// Función para actualizar las gráficas con la fecha seleccionada
function updateDashboard(selectedDate) {
    let dateKey = selectedDate;

    // Si no hay datos para la fecha seleccionada, se generan datos aleatorios
    let data = salesData[dateKey] || generateRandomData();

    // ===== Gráfico de Barras =====
    if (barChart) barChart.destroy();
    const ctxBar = document.getElementById('barChart').getContext('2d');
    barChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: data.categories,
            datasets: [{
                label: 'Ventas por Categoría',
                data: data.values,
                backgroundColor: ['#E74C3C', '#16A085', '#F39C12'],
                borderColor: '#fff',
                borderWidth: 1,
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // ===== Gráfico de Pastel =====
    if (pieChart) pieChart.destroy();
    const ctxPie = document.getElementById('pieChart').getContext('2d');
    pieChart = new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: data.categories,
            datasets: [{
                label: 'Distribución de Ventas',
                data: data.values,
                backgroundColor: ['#E74C3C', '#16A085', '#F39C12'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });

    // ===== Gráfico de Líneas =====
    if (lineChart) lineChart.destroy();
    const ctxLine = document.getElementById('lineChart').getContext('2d');
    lineChart = new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
            datasets: [{
                label: 'Ventas Diarias',
                data: data.dailySales,
                borderColor: '#3498DB',
                backgroundColor: 'rgba(52, 152, 219, 0.3)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
}

// Inicializar Flatpickr para mejorar la selección de fechas
flatpickr("#calendar", {
    dateFormat: "Y-m-d",
    defaultDate: new Date(),
    onChange: function(selectedDates, dateStr) {
        updateDashboard(dateStr); // Actualiza el dashboard al seleccionar fecha
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const menuButton = document.getElementById("menu-toggle");
    const sidebar = document.querySelector(".sidebar");

    menuButton.addEventListener("click", function () {
        sidebar.classList.toggle("collapsed");
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.querySelector(".sidebar");
    const mainContent = document.querySelector(".main-content");
    const toggleBtn = document.getElementById("toggleSidebar");

    toggleBtn.addEventListener("click", function () {
        sidebar.classList.toggle("hidden");
        mainContent.classList.toggle("expanded");
    });
});


// ===== Evento para actualizar el dashboard cuando se cambia la fecha =====
document.getElementById('calendar').addEventListener('change', function() {
    updateDashboard(this.value);
});

// ===== Inicialización con la fecha actual =====
window.onload = function() {
    const today = new Date().toISOString().split('T')[0]; // Obtener la fecha en formato YYYY-MM-DD
    document.getElementById('calendar').value = today;
    updateDashboard(today); // Cargar datos del día actual
};
