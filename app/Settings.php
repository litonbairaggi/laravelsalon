<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    //
    
    protected $table='settingss';
    protected $fillable = [
        'id',
        'email', 
        'facebook',
        'linkedin',
        'twitter',
        'instagram',
        'logo',
    ];
}
