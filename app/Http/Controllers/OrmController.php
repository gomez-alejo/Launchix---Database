<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Product;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    //
    public function consulta0(){
        $products = Product::all();

        return $products;
    }

    public function consulta1(){
        $services = Service::all();

        return $services;
    }
    public function consulta2(){
        $users = User::all();

        return $users;
    }
    public function consulta3(){
        $payments = Payment::all();

        return $payments;
    }

    public function consulta4(){
        
    }
    public function consulta5(){
        
    }
    public function consulta6(){
        
    }
    public function consulta7(){
        
    }
    public function consulta8(){
        
    }
    public function consulta9(){
        
    }
    public function consulta10(){
        
    }
    public function consulta11(){
        
    }
    public function consulta12(){
        
    }
    public function consulta13(){
        
    }
    public function consulta14(){
        
    }
    public function consulta15(){
        
    }
    public function consulta16(){
        
    }
    public function consulta17(){
        
    }
    public function consulta18(){
        
    }
    public function consulta19(){
        
    }
    public function consulta20(){
        
    }
    public function consulta21(){
        
    }
    public function consulta22(){
        
    }
    public function consulta23(){
        
    }
    public function consulta24(){
        
    }
    public function consulta25(){
        
    }
    public function consulta26(){
        
    }
    public function consulta27(){
        
    }
    public function consulta28(){
        
    }
    public function consulta29(){
        
    }
    public function consulta30(){
        
    }
    public function consulta31(){
        
    }
    public function consulta32(){
        
    }
    public function consulta33(){
        
    }
    
}
