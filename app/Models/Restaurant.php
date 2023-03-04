<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'division_id', 'location',
        'description', 'discount', 'latitude', 'longitude',
        'contact_no', 'facebook_page', 'website_link', 'youtube_link',
        'photo', 'tags', 'status', 'popular_deal'
    ];

    public function restaurantrating()
    {
        return $this->hasOne(Restaurantrating::class);
    }

    public function restaurant_menu(){
        return $this->hasMany(Restaurantmenu::class,'restaurant_id','id');
    }
    
    public function restaurantreview()
    {
        return $this->hasMany(Review::class,'restaurant_id');
    }
}
