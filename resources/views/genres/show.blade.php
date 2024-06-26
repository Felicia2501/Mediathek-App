@extends('layouts.app')

@section('content')
    <h2 class="text-center">{{ $sub->title }}</h2>

    <div class="d-flex justify-content-center">
        <table class="table w-50">
            <tr>
                <td>Id</td>
                <td>{{ $sub->id }}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{ $sub->title }}</td>
            </tr>
            <tr>
                <td>Price</td>
                <td>{{ $sub->time }}</td>
            </tr>
            <tr>
                <td>Subscribed at</td>
                <td>{{ $sub->fsk }}</td>
            </tr>
            <tr>
                <td>Subscription end</td>
                <td>{{ $sub->releasedate }}</td>
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
@endsection
