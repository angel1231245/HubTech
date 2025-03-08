<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraficasController extends Controller
{
    // Mostrar el formulario de selección de gráficas
    public function mostrarFormularioGraficas()
    {
        return view('seleccion_graficas');
    }

    // Procesar la selección de gráficas
    public function procesarSeleccionGraficas(Request $request)
    {
        // Validar la selección de gráficas
        $request->validate([
            'graficas' => 'required|array',
            'graficas.*' => 'in:line,bar,pie,doughnut,radar,polarArea,bubble,scatter,area,mixed,candlestick,heatmap',
        ]);

        // Guardar la selección en la sesión
        session(['graficas_seleccionadas' => $request->graficas]);

        // Redirigir al siguiente paso (formulario de carga de archivo)
        return redirect()->route('cargar.archivo');
    }
}
