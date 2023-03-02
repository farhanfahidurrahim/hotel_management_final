<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurantrating extends Model
{
    use HasFactory;
    protected $fillable = [
        'hotel_id',
        'restaurant_id',
        'feedback',
        'star',
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class,'restaurant_id');
    }
}
