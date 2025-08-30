<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    // Include order_id for mass assignment
    protected $fillable = [
        'order_id',
        'payment_method',
        'amount',
        'payment_date',
        'payment_status'
    ];
    protected $casts = [
        'payment_date' => 'datetime',
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
    