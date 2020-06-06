@extends('layouts.app')

@section('content')

<div id="app">
    <div class="container">
        <test></test>

        <form class="" method="GET" action="{{ route('search') }}">
            <input id="term" name="term" class="form-control" type="search">

            <button type="submit" class="btn btn-primary">
                {{ __('Search') }}
            </button>
        </form>
    </div>
</div>

@endsection