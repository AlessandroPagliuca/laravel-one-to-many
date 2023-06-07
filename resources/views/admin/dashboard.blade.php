@extends('layouts.app')

@section('content')
    <div class="container padding-home">
        <h2 class="fs-4 text-secondary my-4 p-2">
            {{ __('Dashboard') }}
        </h2>
        <!--Projects list -->
        <div class="row flex-column justify-content-center">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="text-white">Projects list</h3>
                    <a href="{{ route('admin.projects.create') }}" class="fs-4 btn btn-light blue-01">Create</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Agency</th>
                            <th scope="col">Year</th>
                            <th scope="col-1 col-2 col-3">Url</th>
                            <th scope="col">
                                <i class="fa-solid fa-hammer"></i>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->agency }}</td>
                                <td>{{ $project->year }}</td>
                                <td>{{ $project->url }}</td>
                                <td class="d-flex justify-content-start flex-wrap">
                                    <a href="{{ route('admin.projects.show', $project->slug) }}"
                                        class="btn btn-warning m-1">Show</a>
                                    <a href="{{ route('admin.projects.edit', $project->slug) }}"
                                        class="btn btn-success m-1">Edit</a>
                                    <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.modal')
@endsection
