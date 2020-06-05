@extends('layouts.app')
@section('content')


<div class="row border-bottom">
    <h1>CMS</h1>
</div>
<div class="row">
    <div class="col-3 border-right">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('cms_home')}}">CMS home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('cms_artist')}}">Artists</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cms_album') }}">Albums</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cms_song') }}">Songs</a>
            </li>
        </ul>
    </div>
    <div class="col-9 p-3">
        @yield('cms_content')
    </div>
</div>

@endsection