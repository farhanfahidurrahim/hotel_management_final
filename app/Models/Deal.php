<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'email',
        'location',
        'price',
        'offer_price',
        'discount_price',
    ];
}
