<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'titolo',
        'autore',
        'casa_editrice',
        'anno_pubblicazione',
        'genere',
        'isbn',
        'numero_pagine',
        'disponibile',
        'stato',
        'prestato_a',
        'note',
    ];
}
