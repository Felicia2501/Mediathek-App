@extends('layouts.app')
@section('content')


<h2>Liste der Filme </h2>
<table class="table-bordered">
    <tr>
        <th>Name</th>
        <th>Filme</th>
    </tr>

    @foreach ($gnrs as $gnr)
    <tr>
        <td>{{ $gnr -> name }}</td>
        <td>
<ul>
    @foreach ($gnr->films as $gnr)
        <li>{{ $gnr->title }}</li>
    @endforeach
</ul>
        </td>
    </tr>
    @endforeach
</table>

<hr>

<form action="{{ route( 'genres.store') }}" method="POST">
    @csrf
    <div class="form-group">
    <label for="title">Genre Name</label>
    <input type="text" name="name" id="title" class="form-control" value="{{ old('name') }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Genre anlegen</button>
</form>


@endsection