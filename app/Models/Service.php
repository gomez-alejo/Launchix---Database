<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    use HasFactory;

    protected $primaryKey = 'service_id';
    protected $fillable = [
        'name', 'description', 'price', 'availability', 'entrepreneur_id', 'category_id',
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
}
