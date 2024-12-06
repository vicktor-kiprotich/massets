<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetTypeModel extends Model
{
    protected $table = 'asset_type';

    protected $fillable = [
        'name',
        'description'
    ];
    //
}
