<?php
namespace App\Models;
namespace App\Http\Controllers;

use App\Models\Category;
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
            
            $categories = Category  ::all();

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

    //Mostrar un Producto específico y sus Pedidos
    public function consulta14() {

    $products = Product::find(1);  
    return $products->orders; 
    }

// Mostrar un Servicio específico y sus Pedidos
public function consulta15() {
    $services = Service::find(1);  
    return $services->orders; 
}

// Mostrar un Usuario específico y sus Pedidos
public function consulta16() {

    $users = User::find(1); 
    return $users->orders;  
}

// Mostrar un Pago específico y su Pedido
public function consulta17() {
    
    $payments = Payment::find(1);
    return $payments->orders; 
}

// Mostrar un Pedido específico y sus Productos
public function consulta18() {

    $orders = Order::find(1);  
    return $orders->products;  
}

// Mostrar un Envío específico y su Pedido
public function consulta19() {

    $shipments = Shipment::find(1);  
    return $shipments->orders;  
}

//  Mostrar una Reseña específica y su Producto
public function consulta20() {

    $reviews = Review::find(1); 
    return $reviews->products;  
}

//  Mostrar una Categoría específica y sus Productos
public function consulta21() {

    $categories = Category::find(1);  
    return $categories->products;  
}

//  Mostrar un Emprendedor específico y sus Productos
public function consulta22() {

    $entrepreneurs = Entrepreneur::find(1); 
    return $entrepreneurs->products;  
}

//  Mostrar un Carro de Compras específico y sus Productos
public function consulta23() {

    $shopping_carts = ShoppingCart::find(1);  
    return $shopping_carts->products;  
}

//  Mostrar un Pedido-Producto específico y su Producto
public function consulta24() {

    $order_products = OrderProduct::find(1);  
    return $order_products->products;  
}
    
}
