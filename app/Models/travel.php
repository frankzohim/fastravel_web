<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class travel extends Model
{
    use HasFactory;
    protected $fillable = [
        'travel_id',
        'travel_name',
        'type',
        'starting_point',
        'arrival_point',
        'distance',
        'description'
    ];
}
