@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <h2>{{ $sub->title }}</h2>
</div>

@if(session()->has('message'))
    <div class="alert alert-success text-center">
        {{ session()->get('message') }}
    </div>
@endif    

<form action="{{ route('films.update', $sub->id) }}" method="POST" class="w-75 mx-auto">
    @csrf
    @method('PUT')

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
            @error('title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="time" class="col-md-4 col-form-label text-md-end text-start">Laufzeit</label>
        <div class="col-md-6">
            <input type="text" class="form-control @error('time') is-invalid @enderror" id="time" name="time" value="{{ $sub->time }}">
            @error('time')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="mb-3 row">
        <label for="fsk" class="col-md-4 col-form-label text-md-end text-start">FSK</label>
        <div class="col-md-6">
            <input type="text" class="form-control @error('fsk') is-invalid @enderror" id="fsk" name="fsk" value="{{ $sub->fsk }}">
            @error('fsk')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="mb-3 row">
        <label for="releasedate" class="col-md-4 col-form-label text-md-end text-start">Veröffentlichung</label>
        <div class="col-md-6">
            <input type="text" class="form-control @error('releasedate') is-invalid @enderror" id="releasedate" name="releasedate" value="{{ $sub->releasedate }}">
            @error('releasedate')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="mb-3 row">
        <label for="genre_id" class="col-md-4 col-form-label text-md-end text-start">Genre</label>
        <div class="col-md-6">
            <!-- Verwenden Sie ein verstecktes Eingabefeld für die genre_id -->
            <input type="hidden" name="genre_id" value="{{ $sub->genre_id }}">

            <!-- Dropdown-Menü für Genre -->
            <select class="form-select @error('genre_id') is-invalid @enderror" name="genre_id">
                <option value="">Bitte wählen...</option>
                @foreach($gnrs as $gnr)
                    <option value="{{ $gnr->id }}" @if($gnr->id == $sub->genre_id) selected @endif>{{ $gnr->name }}</option>
                @endforeach
            </select>

            <!-- Fehlermeldung anzeigen, wenn genre_id ungültig ist -->
            @error('genre_id')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
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
        <div class="col-md-5">
            {{ $sub->updated_at }}
        </div>
    </div>
    
    <div class="container d-flex justify-content-center">
        <button type="submit" name="submit" class="btn btn-primary">Speichern</button>
    </div>
</form>

@if ($errors->any())
    <div class="alert alert-danger mt-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
