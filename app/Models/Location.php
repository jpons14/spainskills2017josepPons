<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    protected $fillable = [
        'type_location_id',
        'name'
    ];
    protected $visible = [
        'type_location_id',
        'name'
    ];

    public $timestamps = true;

    /**
     * Establece la clave forane entre la localización y el tipo de localización
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function typeLocation(){
        return $this->belongsTo('App\Models\TypeLocation');
    }
}
