@extends('layouts.app')

@section('content')
    <h2 class="text-center">Neuer Film{{ $sub->title }}</h2>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <form action="{{ route('films.store') }}" method="POST">
        @csrf
        
        <div class="d-flex justify-content-center">
            <table class="table w-50">
                <tr>
                    <td>Titel</td>
                    <td>
                        <input type="text" name="title" value="{{ $sub->title }}" class="form-control"/>
                        @if ($errors->has('title'))
                            @foreach ($errors->get('title') as $error)
                                <span class="text-danger">{{ $errors->get('title') }}
                            @endforeach
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Laufzeit</td>
                    <td><input type="text" name="time" value="{{ $sub->time }}" class="form-control"/></td>
                </tr>
                <tr>
                    <td>FSK</td>
                    <td><input type="text" name="fsk" value="{{ $sub->fsk }}" class="form-control"/></td>
                </tr>
                <tr>
                    <td>Veröffentlichung</td>
                    <td><input type="text" name="releasedate" value="{{ $sub->releasedate }}" class="form-control"/></td>
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
        </div>
        
        <div class="d-flex justify-content-center">
            <input type="submit" name="submit" value="submit" class="btn btn-primary"/>
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
@endsection
