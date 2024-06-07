@extends('layout')

@section('title', 'SpSkills - Movies')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Movies</h1>
    <div class="row">
        @foreach($movies as $movie)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset($movie->posterUrl) }}" class="card-img-top" alt="{{ $movie->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->synopsis }}</p>
                        <p class="card-text"><strong>Duration:</strong> {{ $movie->durationMinutes }} minutes</p>
                        <p class="card-text"><strong>Release Date:</strong> {{ $movie->releaseDate }}</p>
                        <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
