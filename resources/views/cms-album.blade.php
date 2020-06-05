@extends('layouts.cms')
@section('cms_content')

<h2>{{__('Add album')}}</h2>

<form method="POST" action="{{ route('cms_album_submit') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="artistId" class="">{{__('Artist ID')}}</label>
        <div>
            <input id="artistId" type="text" name="artistId" required>
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="">{{__('Album title')}}</label>
        <div>
            <input id="title" type="text" name="title" required>
        </div>
    </div>
    <div class="form-group">
        <label for="artwork" class="">{{__('Album artwork')}}</label>
        <div>
            <input id="artwork" type="file" name="artwork" data-preview="#preview">
            <img id="preview"  src="">
        </div>
    </div>
    <div class="form-group">
        <label for="genre" class="">{{__('Album genre')}}</label>
        <div>
            <input id="genre" type="text" name="genre" required>
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