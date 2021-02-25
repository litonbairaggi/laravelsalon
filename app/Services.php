<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    //
    protected $table='servicess';

    protected $fillable = [
        'name', 
        'description',
    ];
}
