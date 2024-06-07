<!DOCTYPE html>
<html>
<head>
    <title>Movies</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
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
                            <a href="{{ asset($movie->trailerUrl) }}" class="btn btn-primary">Watch Trailer</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
