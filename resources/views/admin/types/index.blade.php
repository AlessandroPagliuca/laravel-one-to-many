@extends('layouts.app')

@section('content')
    <div class="container padding-home">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="text-white">Types list</h1>
            <a href="{{ route('admin.types.create') }}" class="fs-4 btn btn-light blue-01">Create</a>
        </div>
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
                        <td class="d-flex justify-content-start flex-wrap">
                            <a href="{{ route('admin.types.show', $type->slug) }}" class="btn btn-warning m-1">Show</a>
                            <a href="{{ route('admin.types.edit', $type->slug) }}" class="btn btn-success m-1">Edit</a>
                            <form action="{{ route('admin.types.destroy', $type->slug) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn btn btn-danger m-1">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    @include('partials.modal')
@endsection
