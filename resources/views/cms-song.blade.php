@extends('layouts.cms')
@section('cms_content')

<h2>{{__('Add song')}}</h2>

<form method="POST" action="{{ route('cms_song_submit') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="albumId" class="">{{__('Album ID')}}</label>
        <div>
            <input id="albumId" type="text" name="albumId" required>
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="">{{__('Song title')}}</label>
        <div>
            <input id="title" type="text" name="title" required>
        </div>
    </div>
    <div class="form-group">
        <label for="duration" class="">{{__('Song duration (seconds)')}}</label>
        <div>
            <input id="duration" type="number" name="duration" required>
        </div>
    </div>
    <div class="form-group">
        <label for="trackNumber" class="">{{__('Track number')}}</label>
        <div>
            <input id="trackNumber" type="number" name="trackNumber" data-preview="#preview">
            <img id="preview"  src="">
        </div>
    </div>
    <div class="form-group">
        <label for="file" class="">{{__('Song (mp3)')}}</label>
        <div>
            <input id="file" type="file" name="file" data-preview="#preview">
            <img id="preview"  src="">
        </div>
    </div>

    <div>
        @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif
    </div>

    <div class="">
        <button type="submit" class="btn btn-primary">
            {{ __('Save') }}
        </button>
    </div>
</form>

@endsection