@extends('layouts.app')
@section('content')
    <h2>{{ $sub->title }}</h2>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}

        </div>
    @endif


    <form action="{{ route('films.update', $sub) }}" method="POST">
        @method('PUT')
        @csrf
        <table class="table">


            <tr>
                <td>Id</td>
                <td>{{ $sub->id }}</td>
            </tr>
            <tr>
                <td>Titel</td>
                <td><input type="text" name="title" value="{{ $sub->title }}"/>
                @if($errors->has('title'))
                @foreach($errors-> get('title') as $error)
                    <span class="text-danger">{{ $errors->get('title') }}
                @endforeach
                @endif
                </td>
            </tr>
            <tr>
                <td>Laufzeit</td>
                <td><input type="text" name="time" value="{{ $sub->time }}"/></td>
            <tr>
                <td>FSK</td>
                <td><input type="text" name="fsk" value="{{ $sub->fsk }}"/></td>
            </tr>
            <tr>
                <td>releasedate</td>
                <td><input type="text" name="releasedate" value="{{ $sub->releasedate }}"/></td>
            </tr>
            <tr>
                <td>Created At</td>
                <td>{{ $sub->created_at }}</td>
            </tr>
            <tr>
                <td>Updated At</td>
                <td>{{ $sub->updated_at }}</td>
            </tr>

        </table>
        <input type="submit" name="submit" value="submit"/>
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

@endsection
