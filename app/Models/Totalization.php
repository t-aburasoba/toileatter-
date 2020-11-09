<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Totalization extends Model
{
    use HasFactory;

    protected $fillable = [
        'probability_enter_male',
        'probability_enter_female',
        'total_users',
        'beautifulness_male',
        'beautifulness_female',
        'number_male',
        'number_female',
        'distance',
        'evaluation',
        'toilet_id',
    ];
}
