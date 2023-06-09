<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'customer_id',
        'paymentDate',
        'paymentAmount',
    ];

    public function customer(){
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function order(){
        return $this->belongsTo(Order::class, 'order_id');
    }
}
