<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toilet extends Model
{
    use HasFactory;

    protected $fillable = [
        'toilet_name',
        'closet_bowl_number',
        'toilet_image_name',
        'latitude',
        'longtitude',
        'station_id',
    ];
}
