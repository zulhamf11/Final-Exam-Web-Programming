<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'status',
        'total_price',
    ];

    protected $table = 'order';

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function order_detail() {
        return $this->hasMany('App\Models\OrderDetail', 'order_id', 'id');
    }
}
