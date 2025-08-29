<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'shipping_address',
        'billing_address',
        'role',
        'image',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
    ];


    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id', 'id');
    }


    public function cart()
    {
        return $this->hasOne(Cart::class, 'user_id', 'id');
    }


    public function reviews()
    {
        return $this->hasMany(Review::class, 'user_id', 'id');
    }
}
