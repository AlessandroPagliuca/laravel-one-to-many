@extends('layouts.app')
@section('content')
    <h1>Type</h1>
    <p>The type tech is: {{ $type->tech }}</p>
    @foreach ($projects as $project)
        <p>{{ $project->title }}</p>
    @endforeach
@endsection
