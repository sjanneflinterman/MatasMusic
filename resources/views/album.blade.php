@extends('layouts.app')

@section('content')
    <div id="app">
        <div class="container card border-light p-4">
            <div class="row">
                <div class="col-6">
                    <div class="row border-bottom">
                        <h2>Album: {{$album->title}}</h2>
                    </div>
                    <div class="row border-bottom pt-2">
                        <h3>Artist: {{$artist->name}}</h3>
                    </div>
                    <div class="row border-bottom pt-2">
                        <h3>Songs: </h3>
                        <ul>
                            @foreach($songs as $song)
                                <li class="border-bottom">
                                    {{$song->title}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <img class="w-50" src="/{{$artwork}}">
                </div>
            </div>
        </div>
    </div>
@endsection