@extends('layouts.app')

@section('content')

<div id="app">
    <div class="container card border-light">
        <div class="row border-bottom">
            <form class="" method="GET" action="{{ route('search') }}">
                <div class="col-12">
                    <div class="row p-4">
                        <input name="term" class="form-control col" type="search"
                                @if($request != null && $request->has('term'))
                                    placeholder="{{ $request->input('term') }}"
                                @else
                                    placeholder="{{__('Browse')}}"
                                @endif
                                >
                        <button type="submit" class="btn btn-primary col">
                            {{ __('Search') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="card-body">
            <h2>{{__('Songs')}}</h2>
                <ul class="list-unstyled">
                    @foreach($songs as $song)
                        <li>{{$song->title}}</li>
                    @endforeach
                </ul>
            <h2>{{__('Albums')}}</h2>
                <ul class="list-unstyled">
                    @foreach($albums as $album)
                        <a class="link-unstyled" href="{{ route('album', ['id' => $album->id]) }}">
                            <li>{{$album->title}}</li>
                        </a>
                    @endforeach
                </ul>
            <h2>{{__('Artists')}}</h2>
                <ul class="list-unstyled">
                    @foreach($artists as $artist)
                        <li>{{$artist->name}}</li>
                    @endforeach
                </ul>
            </div>        
        </div>
    </div>
</div>

@endsection
