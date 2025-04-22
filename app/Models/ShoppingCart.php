<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shopping_Cart extends Model
{
    use HasFactory;
    protected $table= 'shopping_carts';
    protected $primaryKey = 'shopping_cart_id';
    protected $fillable = [
        'quantity', 'user_id', 'product_id',
    ];

    // Relaciones
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
}
