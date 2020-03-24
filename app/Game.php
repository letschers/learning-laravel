<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $casts = [
        'type' => 'array'
    ];
}
