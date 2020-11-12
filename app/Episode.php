<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    function movie() {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }
}
