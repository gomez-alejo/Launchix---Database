<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function saludo() {
        return 'Hola desde usuario';
    }
}
