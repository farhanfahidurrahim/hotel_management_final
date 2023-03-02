<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewHotel extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'user_id',
        'user_name',
        'hotel_id',
        'hotel_name',
        'star',
        'feedback',
    ];

    public function username()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function restaurantname()
    {
        return $this->belongsTo(Restaurant::class,'hotel_id');
    } 
}
