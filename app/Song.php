<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'track_number', 'duration', 'file', 'original_file',
    ];

    /**
     * Album this song belongs to.
     */
    public function album()
    {
        return $this->belongsTo('App\Album');
    }
}
