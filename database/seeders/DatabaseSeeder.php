<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Entrepreneur;
use App\Models\User;
use App\Models\Order;
use App\Models\Order_Product;
use App\Models\OrderProduct;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Review;
use App\Models\Service;
use App\Models\Shipment;
use App\Models\ShoppingCart;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         
        /*$this->call(UserSeeder::class);*/

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(10)->create();
        Category::factory(10)->create();
        Shipment::factory()->count(10)->create();
        Payment::factory()->count(10)->create();
        Entrepreneur::factory()->count(10)->create();
        Review::factory()->count(7)->create();
        Order::factory()->count(10)->create();
        Product::factory()->count(10)->create();
        OrderProduct::factory()->count(10)->create();
        Service::factory()->count(10)->create();
        ShoppingCart::factory()->count(10)->create();

    }
}
