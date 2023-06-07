@extends('layouts.app')
@section('content')
    <div class="container padding-home ">
        <h2 class="text-white text-uppercase">Show single type</h2>
        <div class="d-flex justify-content-start align-items-center pt-3">
            <p class="text-white text-uppercase fw-semibold">The type tech is:</p>
            <p class="badge bg-light blue-01 p-2 ms-3">{{ $type->tech }}</p>

        </div>

    </div>
@endsection
