<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_item_id',
        'user_id',
        'title',
        'item_id',
        'rating',
        'comment',
    ];

    public function orderItem()
    {
    return $this->belongsTo(OrderItem::class, 'order_item_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}

