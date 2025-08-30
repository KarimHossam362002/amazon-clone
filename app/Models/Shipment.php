<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['order_id', 'shipment_date', 'status'];
    protected $casts = [
        'shipment_date' => 'datetime',
    ];
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
}
