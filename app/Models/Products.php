<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'image',
        'price',
        'desc',
    ];
    
    protected $table = 'items';


    public function order_detail() {
        return $this->hasMany('App\Models\OrderDetail', 'item_id', 'id');
    }
}
