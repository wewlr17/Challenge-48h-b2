<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{

    protected $fillable = [
        'title', 'lat', 'lon'
    ];
}
