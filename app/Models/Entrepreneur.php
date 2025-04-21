<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Entrepreneur extends Model
{
    use HasFactory;

    protected $primaryKey = 'entrepreneur_id';
    protected $fillable = [
        'business_name', 'description', 'contact', 'user_id',
    ];

    // Relaciones
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'entrepreneur_id', 'entrepreneur_id');
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class, 'entrepreneur_id', 'entrepreneur_id');
    }
}
