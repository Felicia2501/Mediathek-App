@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <h2>Filme nach Genre</h2>
</div>

<div class="d-flex justify-content-center">
    <table class="table table-bordered w-75">
        <tr>
            <th>Genre</th>
            <th>Filme</th>
        </tr>

        @foreach ($gnrs as $gnr)
        <tr>
            <td>{{ $gnr->name }}</td>
            <td>
                <ul>
                    @foreach ($gnr->films as $film)
                    <li>{{ $film->title }}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </table>
</div>

<hr>

<div class="d-flex justify-content-center">
    <form action="{{ route('genres.store') }}" method="POST" class="w-50">
        @csrf
        <div class="form-group">
            <label for="title"> Neues Genre</label>
            <input type="text" name="name" id="title" class="form-control" value="{{ old('name') }}" required><br>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Genre anlegen</button>
        </div>
    </form>
</div>

@endsection
