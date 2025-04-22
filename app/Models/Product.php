<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';
    protected $fillable = [
        'name', 'description', 'price', 'stock', 'image_paths', 'entrepreneur_id', 'category_id',
    ];

    // Relaciones
    public function entrepreneurs(): BelongsTo
    {
        return $this->belongsTo(Entrepreneur::class, 'entrepreneur_id', 'entrepreneur_id');
    }

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(
            Order::class,
            'order_products',
            'product_id',
            'order_id'
        )->withPivot('quantity')->withTimestamps();
    }

    public function orderProducts(): HasMany
    {
        return $this->hasMany(Order_Product::class, 'product_id', 'product_id');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'product_id', 'product_id');
    }

    public function shopping_carts(): HasMany
    {
        return $this->hasMany(Shopping_Cart::class, 'product_id', 'product_id');
    }

}
