<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationModel extends Model
{
    protected $table = 'location';


    protected $fillable = [
        'name',
        'description'
    ];
    //
}
