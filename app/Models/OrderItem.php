<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 'item_id', 'quantity', 'unit_price'
    ];


    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
    public function review()
    {
    return $this->hasOne(Review::class, 'order_item_id', 'id');
    }
}
