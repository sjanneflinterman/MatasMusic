<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'genre'
    ];

    /**
     * Users that belong to the album.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Songs that belong to this album.
     */
    public function songs()
    {
        return $this->hasMany('App\Song');
    }

    /**
     * Artist that belongs to this album.
     */
    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }
}
