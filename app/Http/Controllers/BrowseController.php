<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Artist;
use App\Album;
use App\Song;

class BrowseController extends Controller
{
    /**
     * Get and show results for search request. 
     */
    public function search(Request $request)
    {
        $searchTerm = '%'.$request->term.'%';

        $songs = Song::where('title', 'like', $searchTerm)->get();
        $albums = Album::where('title', 'like', $searchTerm)->get();
        $artists = Artist::where('name', 'like', $searchTerm)->get();
        if($artists->first())
        {
            $artistAlbums = Album::where('artist_id', $artists[0]->id)->get();
            foreach($artistAlbums as $album)
            {
                //only add album if it isn't already present in result.
                if(!$albums->where('id',$album->id)->first())
                {
                    $albums[] = $album;
                }                
            }
        }
        
        return view('browse', ['songs' => $songs,'albums' => $albums,'artists' => $artists, 'request' => $request]);
    }

    /**
     * Show album page for album with {id}
     */
    public function album($id)
    {
        $album = Album::where('id', $id)->first();
        $artist = Artist::where('id', $album->artist_id)->first();
        $songs = Song::where('album_id', $album->id)->get();
        $artwork = 'artwork/'.$album->artwork;
        
        return view('album', ['album' => $album, 'artist' => $artist, 'songs' => $songs, 'artwork'=> $artwork]);
    }
}