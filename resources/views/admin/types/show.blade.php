@extends('layouts.app')
@section('content')
    <div class="container padding-home text-white">
        <h1>Show</h1>
        <p class="text-uppercase pt-3">The type tech is: {{ $type->tech }}</p>
        @foreach ($type->projects as $project)
            <p>{{ $project->title }}</p>
            <p class="text-white">{{ $project->url }}</p>
        @endforeach
    </div>
@endsection
