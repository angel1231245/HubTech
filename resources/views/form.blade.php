<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección de Gráficas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Selecciona las gráficas</h1>
    <form action="{{ route('procesar.seleccion.graficas') }}" method="POST">
        @csrf <!-- Token de seguridad de Laravel -->
        <div class="form-group">
            <label>Selecciona las gráficas que deseas generar:</label><br>

            <!-- Opciones de gráficas -->
            <div class="form-check">
                <input type="checkbox" name="graficas[]" value="line" id="line">
                <label for="line">Gráfico de Línea</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="graficas[]" value="bar" id="bar">
                <label for="bar">Gráfico de Barras</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="graficas[]" value="pie" id="pie">
                <label for="pie">Gráfico de Tarta</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="graficas[]" value="doughnut" id="doughnut">
                <label for="doughnut">Gráfico de Dona</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="graficas[]" value="radar" id="radar">
                <label for="radar">Gráfico de Radar</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="graficas[]" value="polarArea" id="polarArea">
                <label for="polarArea">Gráfico de Área Polar</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="graficas[]" value="bubble" id="bubble">
                <label for="bubble">Gráfico de Burbujas</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="graficas[]" value="scatter" id="scatter">
                <label for="scatter">Gráfico de Dispersión</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="graficas[]" value="area" id="area">
                <label for="area">Gráfico de Área</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="graficas[]" value="mixed" id="mixed">
                <label for="mixed">Gráfico Mixto</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="graficas[]" value="candlestick" id="candlestick">
                <label for="candlestick">Gráfico de Velas</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="graficas[]" value="heatmap" id="heatmap">
                <label for="heatmap">Mapa de Calor</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Continuar</button>
    </form>
</div>

<!-- Bootstrap JS (opcional, para funcionalidades) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
