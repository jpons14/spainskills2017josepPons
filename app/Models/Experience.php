<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiencies';
    protected $fillable = [
        'user_id',
        'photo_id',
        'location_id',
        'description_birev',
        'type_establishment',
        'description_long',
        'youtube_video',
        'puntuation',
        'categories'
    ];
    public $timestamps = TRUE;

    /**
     * Establece la clave foranea entre experiencias y usuarios
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    /**
     * establece la clave foranea entre experiencias y fotos
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photo()
    {
        return $this->hasMany('App\Models\Photo');
    }

    /**
     * Establece la clave foranea entre experiencias y localización
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location()
    {
        return $this->belongsTo('App\Models\Location');
    }

    /**
     * Establece la clave forane entre experiencias y categorais
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categoreis()
    {
        return $this->hasMany('App\models\Category'); // se crea una tabla privote
    }
}
