<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $table='gallerys';

    protected $fillable = [
        'name', 
        'gallery_img',
    ];
}
