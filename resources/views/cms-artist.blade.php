@extends('layouts.cms')
@section('cms_content')

<h2>{{__('Add artist')}}</h2>

<form method="POST" action="{{ route('cms_artist_submit') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name" class="">{{__('Artist name')}}</label>
        <div>
            <input id="name" type="text" name="name" required>
            @if($errors->any())
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            @endif
        </div>
    </div>
    <div class="">
        <button type="submit" class="btn btn-primary">
            {{ __('Save') }}
        </button>
    </div>
</form>

@endsection