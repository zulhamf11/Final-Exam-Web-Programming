<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'order_id',
        'qty',
        'total_price',
    ];

    protected $table = 'detail_order';

    public function product() {
        return $this->belongsTo('App\Models\Products', 'item_id', 'id');
    }

    public function order() {
        return $this->belongsTo('App\Models\Order', 'order_id', 'id');
    }

}
