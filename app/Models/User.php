<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address', 
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

        // Relaciones
        public function entrepreneurs(): HasOne
        {
            return $this->hasOne(Entrepreneur::class, 'user_id', 'user_id');
        }
    
        public function orders(): HasMany
        {
            return $this->hasMany(Order::class, 'user_id', 'user_id');
        }
    
        public function reviews(): HasMany
        {
            return $this->hasMany(Review::class, 'user_id', 'user_id');
        }
    
        public function shoppingCartItems(): HasMany
        {
            return $this->hasMany(ShoppingCart::class, 'user_id', 'user_id');
        }
}
