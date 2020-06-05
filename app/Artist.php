<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Albums that belong to the artist.
     */
    public function albums()
    {
        return $this->hasMany('App\Album');
    }
}
