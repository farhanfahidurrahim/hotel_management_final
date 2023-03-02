<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function restaurant()
    {
        return $this->hasMany(Restaurant::class,'division_id');
    }

    public function hotel()
    {
        return $this->hasMany(Hotel::class,'division_id');
    }
}
