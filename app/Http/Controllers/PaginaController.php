<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function servicios()
    {
        return view('servicios');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function aireAcondicionado()
    {
        return view('aireacon');
    }

    public function frenos()
    {
        return view('frenos');
    }

    public function mantenimiento()
    {
        return view('mantenimiento');
    }

    public function motor()
    {
        return view('motor');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function index()
    {
        return view('index');
    }
}
