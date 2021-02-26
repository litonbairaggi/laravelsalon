<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $table='teams';

    protected $fillable = [
        'id',
        'name', 
        'desigation	',
        'facebook',
        'linkedin',
        'twitter',
        'instagram',
        'team_img',
    ];
}
