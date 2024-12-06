<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentModel extends Model
{
    protected $table = 'department';
    protected $fillable = [
        'name',
        'description'
    ];
    //
}
