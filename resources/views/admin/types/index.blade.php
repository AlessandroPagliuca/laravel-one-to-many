@extends('layouts.app')

@section('content')
    <h1>Types list</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Type</th>
                <th scope="col">Created at</th>
                <th scope="col">Tools</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <th scope="row">{{ $type->id }}</th>
                    <td>{{ $type->tech }}</td>
                    <td>{{ $type->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.types.show', $type->slug) }}">Show</a>
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
