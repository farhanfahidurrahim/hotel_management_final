<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;

class Restaurantmenu extends Model
{
    use HasFactory;
    protected $fillable = ['restaurant_id','name','description','discount','photo','tags','status'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class,'restaurant_id');
    }
}
