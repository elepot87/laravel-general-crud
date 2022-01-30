<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{
    protected $table = 'jokes';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'ratings',
    ];
}
