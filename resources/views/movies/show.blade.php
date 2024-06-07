@extends('layout')

@section('title', $movie->title)

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset($movie->posterUrl) }}" class="card-img-top" alt="{{ $movie->title }}">
                <div class="card-body">
                    <h1 class="card-title">{{ $movie->title }}</h1>
                    <p class="card-text">{{ $movie->synopsis }}</p>
                    <p class="card-text"><strong>Duration:</strong> {{ $movie->durationMinutes }} minutes</p>
                    <p class="card-text"><strong>Release Date:</strong> {{ $movie->releaseDate }}</p>
                    <a href="{{ asset('assets/trailers/' . $movie->trailerUrl) }}" class="btn btn-primary">Watch Trailer</a>
                    <a href="{{ url('/movies') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
