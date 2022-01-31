<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // use HasFactory;

    protected $fillable = [

        'title',
        'subtitle',
        'author',

        'release_date',
        'pages',
    ];
}