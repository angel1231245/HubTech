<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios = [
            (object)[
                'imagen' => 'img/diagnostico.png',
                'titulo' => 'Diagnóstico Profesional',
                'descripcion' => 'Análisis completo de tu vehículo.'
            ],
            (object)[
                'imagen' => 'img/reparacion.png',
                'titulo' => 'Reparaciones de Calidad',
                'descripcion' => 'Soluciones integrales garantizadas.'
            ],
            (object)[
                'imagen' => 'img/compromiso.png',
                'titulo' => 'Compromiso con la Seguridad',
                'descripcion' => 'Trabajamos con estándares estrictos.'
            ],
            (object)[
                'imagen' => 'img/servicio.png',
                'titulo' => 'Servicio Limpio',
                'descripcion' => 'Asistencia para llevar tu auto al taller.'
            ]
        ];

        return view('home', compact('servicios'));
    }

    public function servicios()
    {
        return view('servicios');
    }

    public function contacto()
    {
        return view('contacto');
    }
}
