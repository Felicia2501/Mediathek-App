@extends('layouts.app')
@section('content')


<h2>Liste der Filme </h2>
<table class="table-bordered">
    <tr>
        <th>Name</th>
    </tr>

    @foreach ($gnrs as $gnr)
    <tr>
        <td>{{ $gnr -> name }}</td>
    </tr>
    @endforeach
</table>

<hr>

<form action=„{{ route( 'genres.store') }}“ method="POST">
    @csrf
    <div class="form-group">
    <label for="title">Genre Name</label>
    <input type="text" name="name" id="title" class="form-control" value="{{ old('name') }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Genre anlegen</button>
</form>


@endsection