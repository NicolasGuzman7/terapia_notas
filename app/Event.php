<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table= 'evento';

    protected $fillable = [
        'titulo', 'descripcion', 'fecha', 'imagenevento', 'lugar', 'hora'
    ];

    public $timestamps = false;
}