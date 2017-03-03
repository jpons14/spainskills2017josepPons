<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeLocation extends Model
{
    protected $table = 'type_locations';
    protected $fillable = [
        'type'
    ];
    public $timestamps = true;
}
