@extends('layouts.app')

@section('content')
    <section class="container padding-home">
        <h1 class="blue-01">Insert new project</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label blue-01 fw-bold">Title</label>
                <input type="text" class="form-control @error('title') is-invalid
                @enderror" name="title"
                    id="title" aria-describedby="titleComic" value=" {{ old('title') }} ">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="agency" class="form-label blue-01 fw-bold">Agency</label>
                <input type="text" class="form-control @error('agency') is-invalid
                @enderror"
                    name="agency" id="agency" aria-describedby="agencyProject" value=" {{ old('agency') }} ">
                @error('agency')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="year" class="form-label blue-01 fw-bold">Year</label>
                <input type="text" class="form-control @error('year') is-invalid
                @enderror"
                    name="year" id="year" aria-describedby="yearProject" value=" {{ old('year') }} ">
                @error('year')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="url" class="form-label blue-01 fw-bold">Url</label>
                <textarea name="url" id="url" class="@error('url') is-invalid
                @enderror" cols="30"
                    rows="10" aria-describedby="urlProject">

                </textarea>
                @error('url')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </section>
@endsection
