<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Artist;
use App\Album;
use App\Song;


class CMSController extends Controller
{
    /**
     * Show the cms dashboard.
     */
    public function index()
    {
        return view('cms');
    }
    /**
     * Show the cms-artist dashboard.
     */
    public function artist()
    {
        return view('cms-artist');
    }
    /**
     * Show the cms-album dashboard.
     */
    public function album()
    {
        return view('cms-album');
    }
    /**
     * Show the cms-song dashboard.
     */
    public function song()
    {
        return view('cms-song');
    }

    /**
     * Handle artist post request.
     */
    public function artistSubmit(Request $request)
    {
        if (!$request->name)
        {
            return Redirect::back()->withErrors('Name required');
        }

        $artist = new Artist();
        $artist->name = $request->name;
        $artist->save();

        return Redirect::back();
    }

    /**
     * Handle album post request.
     */
    public function albumSubmit(Request $request)
    {
        $validation = [];
        if (!$request->title)
        {
            $validation[] ='Title required';
        }
        if (!$request->artistId)
        {
            $validation[] ='ArtistId required';
        }
        if (!$request->genre)
        {
            $validation[] ='Genre required';
        }
        if (count($validation) > 0) {
            return Redirect::back()->withErrors($validation);
        }

        $album = new Album();
        $album->title = $request->title;
        $album->artist_id = $request->artistId;
        $album->artwork = time().'.'.$request->artwork->getClientOriginalExtension();
        $album->genre = $request->genre;
        $album->save();

        $request->artwork->move(public_path('artwork'), $album->artwork);

        return Redirect::back();
    }

    public function songSubmit(Request $request)
    {
        $validation = [];
        if (!$request->title)
        {
            $validation[] ='Title required';
        }
        if (!$request->albumId)
        {
            $validation[] ='AlbumId required';
        }
        if (!$request->duration)
        {
            $validation[] ='Duration required';
        }
        if (!$request->file)
        {
            $validation[] ='File required';
        }
        if (count($validation) > 0) {
            return Redirect::back()->withErrors($validation);
        }

        $song = new Song();
        $song->album_id = $request->albumId;
        $song->title = $request->title;
        $song->duration = gmdate("H:i:s", $request->duration);
        $song->track_number = $request->trackNumber;
        $song->file = time().'.'.$request->file->getClientOriginalExtension();
        $song->original_file = $song->file;
        $song->save();
        
        $request->file->move(public_path('audio'), $song->file);

        return Redirect::back();
    }

}
