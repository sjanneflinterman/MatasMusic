<?php

use Illuminate\Database\Seeder;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $artist = App\Artist::create([
        //     'name' =>
        // ]);
        // $album = App\Album::create([
        //     'title' =>
        //     'artwork' =>
        //     'genre' =>
        // ]);
        // $song = App\Song::create([
        //     'title' =>
        //     'album_id' =>
        //     'duration' =>
        //     'file' => 
        //     'original_file' =>
        // ]);
        $artist = App\Artist::create([
            'name' => 'Taylor Swift'
        ]);
        $artist->fresh();
        $album = App\Album::create([
            'artist_id' => $artist->id,
            'title' => 'Red',
            'artwork' => '121324344.png',
            'genre' => 'Pop rock'
        ]);
        $album->fresh();
        $song = App\Song::create([
            'title' => 'State of Grace',
            'album_id' => $album->id,
            'track_number' => 1,
            'duration' => 120,
            'file' => '124541155',
            'original_file' => '124541155'
        ]);
        $artist = App\Artist::create([
            'name' => 'the Mountain Goats'
        ]);
        $artist->fresh();
        $album = App\Album::create([
            'artist_id' => $artist->id,
            'title' => 'Tallahassee',
            'artwork' => '132242122.png',
            'genre' => 'Folk rock',
        ]);
        $album->fresh();
        $song = App\Song::create([
            'title' => 'Tallahassee',
            'album_id' => $album->id,
            'track_number' => 1,
            'duration' => 120,
            'file' => '154343145',
            'original_file' => '154343145'
        ]);
        $song = App\Song::create([
            'title' => 'First Few Desperate Hours',
            'album_id' => $album->id,
            'track_number' => 2,
            'duration' => 120,
            'file' => '124546844',
            'original_file' => '124546844'
        ]);
        $song = App\Song::create([
            'title' => 'Southwood Plantation Road',
            'album_id' => $album->id,
            'track_number' => 3,
            'duration' => 120,
            'file' => '315421542',
            'original_file' => '315421542'
        ]);
        
    }
}
