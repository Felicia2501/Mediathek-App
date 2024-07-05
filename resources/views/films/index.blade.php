@extends('layouts.app')
@section('content')
    <h2>Liste der Filme </h2>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Titel</th>
            <th>Laufzeit</th>
            <th>FSK</th>
            <th>Veröffentlichung</th>
            <th>Genre</th>
            <th>Aktionen</th>
        </tr>


        @foreach ($subs as $sub)
            <tr>
                <td>{{ $sub->id }}</td>
                <td>{{ $sub->title }}</td>
                <td>{{ $sub->time }}</td>
                <td>{{ $sub->fsk }}</td>
                <td>{{ $sub->releasedate }}</td>
                <td>
    @if ($sub->genre)
        {{ $sub->genre->name }}
    @else
        
    @endif
</td>

                
                <td>
    <a href="{{ route('films.show', $sub) }}">Details</a> | 
    <a href="{{ route('films.edit', $sub) }}">Bearbeiten</a>
</td>

            </tr>
        @endforeach
    </table>
@endsection
