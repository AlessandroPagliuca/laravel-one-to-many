@extends('layouts.app')
@section('content')
    <div class="container padding-home text-white">
        <h1>Show</h1>
        <p>The type tech is: {{ $type->tech }}</p>
        @foreach ($projects as $project)
            <p>{{ $project->title }}</p>
        @endforeach
    </div>
@endsection
