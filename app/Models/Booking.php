<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'customer_phone',
        'hotel_id',
        'room_id',
        'check_in',
        'check_out',
        'distance',
        'original_price',
        'discount',
        'final_price',
        'status',
    ];

    public function username()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function hotel()
    {
        return $this->belongsTo(Hotel::class,'hotel_id');
    }
    public function hotelroom()
    {
        return $this->belongsTo(Hotelroom::class,'room_id');
    }
}
