<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    function genre() {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }

    function episodes() {
        return $this->hasMany(Episode::class, 'movie_id', 'id');
    }
}
