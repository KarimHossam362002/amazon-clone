<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['payment_method', 'amount', 'payment_date', 'payment_status'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
}
