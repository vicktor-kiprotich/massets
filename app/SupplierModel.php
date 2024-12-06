<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    protected $table = 'supplier';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'city',
        'zip',
        'country',
        'address'
    ];
    //
}
