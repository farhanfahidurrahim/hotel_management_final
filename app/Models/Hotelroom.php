<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotel;

class Hotelroom extends Model
{
    use HasFactory;
    protected $fillable = ['hotel_id','title','subtitle','description','offer_start_date','offer_end_date','beds','baths','price','discount','discount_price','max_occupancy','info','private_policy','image',];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class,'hotel_id');
    }
}