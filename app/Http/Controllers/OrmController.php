<?php
namespace App\Models;
namespace App\Http\Controllers;


use App\Models\Entrepreneur;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Review;
use App\Models\Service;
use App\Models\Shipment;
use App\Models\ShoppingCart;
use App\Models\User;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    /////////////////////////////////////////
    // Consultas individuales de cada tabla//
    /////////////////////////////////////////

    //Mostrar todos los productos
    public function consulta1(){
        $products = Product::all();

        return $products;
    }

    //Mostrar todos los servicios
    public function consulta2(){
        $services = Service::all();

        return $services;
    }

    //Mostrar todos los usuarios
    public function consulta3(){
        $users = User::all();

        return $users;
    }

    //Mostrar todos los pagos
    public function consulta4(){
        $payments = Payment  ::all();

        return $payments;
    }

    //Mostrar todas las pedidos
    public function consulta5(){
        
        $orders = Order  ::all();

        return $orders;
    }

    //Mostrar todos los envios
    public function consulta6(){
        $shipments = Shipment  ::all();

        return $shipments;
    }

    //Mostrar todas las reseñas
    public function consulta7(){
        
        $reviews = Review  ::all();

        return $reviews;
    }

    //Mostrar todas las categorias
    public function consulta8(){
        
        $categories = Review  ::all();

        return $categories;
    }

    //Mostrar todos los emprendedores 
    public function consulta9(){
        
        $entrepreneurs = Entrepreneur  ::all();

        return $entrepreneurs;
    }

    //Mostrar todos los carros de compras
    public function consulta10(){
        
        $shopping_carts = ShoppingCart::all();

        return $shopping_carts;
    }

    //Mostrar todo pedidos_productos
    public function consulta11(){
        $orderProducts = OrderProduct  ::all();

        return $orderProducts;
    }

    //////////////////////////////////////////
    ////Consultas entre tablas intermedias////
    //////////////////////////////////////////

    public function consulta12(){

        return Order::with('products')->get();
    }

    public function consulta13(){
        return Product::with('orders')->get();
    }

      /////////////////////////////
     ///Consultas entre tablas////
    /////////////////////////////

    public function consulta14(){
        return Product::with('orders')->get();
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
