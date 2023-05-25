<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'assistant_id',
        'order_id',
        'reviewDate',
        'reviewContent',
        'rating',
    ];
}
