<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order_Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'order_product_id';
    protected $fillable = [
        'quantity', 'order_id', 'product_id',
    ];

    // Relaciones
    public function orders(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'order_id', 'order_id');
    }

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
}
