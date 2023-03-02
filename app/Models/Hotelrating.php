<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotelrating extends Model
{
    use HasFactory;
    protected $fillable = [
        'hotel_id',
        'restaurant_id',
        'feedback',
        'star',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
