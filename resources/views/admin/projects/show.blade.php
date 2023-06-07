@extends('layouts.app')

@section('content')
    <div class="container padding-home">
        <h2 class="fs-3 text-secondary my-4 p-2">
            {{ __('Selected project') }}
        </h2>
        <!--Projects list -->
        <div class="row flex-column justify-content-center">
            <div class="col-12">
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


                    </tbody>
                </table>
            </div>
        @endsection
