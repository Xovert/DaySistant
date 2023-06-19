<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'assistant_id',
        'orderDate',
        'status',
        'startDate',
        'endDate',
        'specification',
        'description'
    ];

    public function customer(){
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function assistant(){
        return $this->belongsTo(User::class, 'assistant_id');
    }

    public function payment(){
        return $this->hasOne(Payment::class, 'order_id');
    }

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query
                ->where('id','like','%' .request('search'). '%')
                ->orWhereHas('customer', function($query) use ($search){
                    $query
                        ->where('firstname','like','%' .request('search'). '%')
                        ->orWhere('lastname','like','%' .request('search'). '%');
                });
        });

        $query->when($filters['searchAssistant'] ?? false, function($query, $search) {
            return $query
                ->where('id','like','%' .request('searchAssistant'). '%')
                ->orWhereHas('assistant', function($query) use ($search){
                    $query
                        ->where('firstname','like','%' .request('searchAssistant'). '%')
                        ->orWhere('lastname','like','%' .request('searchAssistant'). '%');
                });
        });
    }
}
