<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'genreId' => 2,
                'title' => 'Spider-Man: Across the Spider-Verse',
                'synopsis' => 'Miles Morales catapults across the Multiverse, where he encounters a team of Spider-People charged with protecting its very existence. When the heroes clash on how to handle a new threat, Miles must redefine what it means to be a hero.',
                'durationMinutes' => 140,
                'releaseDate' => '2023-06-01',
                'posterUrl' => 'assets/posters/1.jpg',
                'trailerUrl' => 'assets/trailers/2.mp4'
            ],
            [
                'genreId' => 3,
                'title' => 'Barbie',
                'synopsis' => 'To live in Barbie Land is to be a perfect being in a perfect place. Unless you have a full-on existential crisis. Or you\'re a Ken.',
                'durationMinutes' => 114,
                'releaseDate' => '2023-07-20',
                'posterUrl' => 'assets/posters/3.jpg',
                'trailerUrl' => 'assets/trailers/4.mp4'
            ],
            [
                'genreId' => 1,
                'title' => 'Everything Everywhere All at Once',
                'synopsis' => 'A middle-aged Chinese immigrant is swept up into an insane adventure in which she alone can save existence by exploring other universes and connecting with the lives she could have led.',
                'durationMinutes' => 139,
                'releaseDate' => '2022-06-23',
                'posterUrl' => 'assets/posters/5.jpg',
                'trailerUrl' => 'assets/trailers/6.mp4'
            ],
            [
                'genreId' => 2,
                'title' => 'Birds of Prey',
                'synopsis' => 'After splitting with the Joker, Harley Quinn joins superheroines Black Canary, Huntress, and Renee Montoya to save a young girl from an evil crime lord.',
                'durationMinutes' => 109,
                'releaseDate' => '2020-02-06',
                'posterUrl' => 'assets/posters/7.jpg',
                'trailerUrl' => 'assets/trailers/8.mp4'
            ],
            [
                'genreId' => 4,
                'title' => 'La La Land',
                'synopsis' => 'While navigating their careers in Los Angeles, a pianist and an actress fall in love while attempting to reconcile their aspirations for the future.',
                'durationMinutes' => 128,
                'releaseDate' => '2017-01-19',
                'posterUrl' => 'assets/posters/9.jpg',
                'trailerUrl' => 'assets/trailers/10.mp4'
            ]
        ];

        foreach ($movies as $movie) {
            Movie::create([
                'title' => $movie['title'],
                'synopsis' => $movie['synopsis'],
                'durationMinutes' => $movie['durationMinutes'],
                'releaseDate' => $movie['releaseDate'],
                'posterUrl' => $movie['posterUrl'],
                'trailerUrl' => $movie['trailerUrl'],
                'id_genre' => $movie['genreId'],
                'id_user' => 1 // Assumindo que o usuário com ID 1 existe
            ]);
        }
    }
}
