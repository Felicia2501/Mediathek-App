@extends('layouts.app')

@section('content')
<h2>{{ $sub->title }}</h2>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}

        </div>
    @endif    


<form action="{{ route('films.update', $sub->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="mb-3 row">
            <label for="code" class="col-md-4 col-form-label text-md-end text-start">Id</label>
            <div class="col-md-6">
                <p>{{ $sub->id }}</p>
            </div>
        </div>
    
        <div class="mb-3 row">
            <label for="title" class="col-md-4 col-form-label text-md-end text-start">Titel</label>
            <div class="col-md-6">
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $sub->title }}">
                @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="time" class="col-md-4 col-form-label text-md-end text-start">Laufzeit</label>
            <div class="col-md-6">
                <input type="text" class="form-control @error('time') is-invalid @enderror" id="time" name="time" value="{{ $sub->time }}">
                @if ($errors->has('time'))
                <span class="text-danger">{{ $errors->first('time') }}</span>
                @endif
            </div>
        </div>

        <div class="mb-3 row">
            <label for="fsk" class="col-md-4 col-form-label text-md-end text-start">FSK</label>
            <div class="col-md-6">
                <input type="text" class="form-control @error('fsk') is-invalid @enderror" id="fsk" name="fsk" value="{{ $sub->fsk }}">
                @if ($errors->has('fsk'))
                <span class="text-danger">{{ $errors->first('fsk') }}</span>
                @endif
            </div>
        </div>

        <div class="mb-3 row">
            <label for="releasedate" class="col-md-4 col-form-label text-md-end text-start">Veröffentlichung</label>
            <div class="col-md-6">
                <input type="text" class="form-control @error('releasedate') is-invalid @enderror" id="releasedate" name="releasedate" value="{{ $sub->releasedate }}">
                @if ($errors->has('releasedate'))
                <span class="text-danger">{{ $errors->first('releasedate') }}</span>
                @endif
            </div>
        </div>

        <div class="mb-3 row">
            <label for="genre" class="col-md-4 col-form-label text-md-end text-start">Genre</label>
            <div class="col-md-6">
                <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre" name="genre" value="{{ $sub->genre }}">
                @if ($errors->has('genre'))
                <span class="text-danger">{{ $errors->first('genre') }}</span>
                @endif
            </div>
        </div>

        <div class="mb-3 row">
            <label for="created_at" class="col-md-4 col-form-label text-md-end text-start">Created At</label>
            <div class="col-md-6">
                <p>{{ $sub->created_at }}</p>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="updated_at" class="col-md-4 col-form-label text-md-end text-start">Updated At</label>
            <div class="col-md-6">
                <p>{{ $sub->updated_at }}</p>
            </div>
        </div>
    
        <div class="mb-3 row">
            <input type="submit" name="submit" value="speichern"/>
        </div>

    </div>
</form>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


    




    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
