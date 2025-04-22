<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function saludo() {
        return 'Hola desde servicio';
    }
}
