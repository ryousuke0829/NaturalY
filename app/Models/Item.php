<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'items';

    protected $fillable = [
        'name',
        'category',
        'price',
        'contents',
        'delivery_date',
        'picture_1',
        'picture_2',
        'picture_3',
        'description',
        'user_id',
    ];

    // Relation
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // Favorite or not
    public function isFavoritedBy($userId)
    {
        return $this->favorites()->where('user_id', $userId)->exists();
    }

    // Count the niumber of favorites of its Item 
    public function favoriteCount()
    {
        return $this->hasMany(Favorite::class, 'item_id', 'id')->count();
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

}
