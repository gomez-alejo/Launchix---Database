<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function saludar(){
        return "Hola desde el controlador UserController";
    }
}
