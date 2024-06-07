<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->unique()->sentence(),
            'synopsis' => $this->faker->paragraph(),
            'durationMinutes' => $this->faker->numberBetween(90, 180),
            'releaseDate' => $this->faker->date(),
            'posterUrl' => 'assets/posters/' . $this->faker->unique()->word() . '.jpg', // caminho relativo ajustado
            'trailerUrl' => 'assets/trailers/' . $this->faker->unique()->word() . '.mp4', // caminho relativo ajustado
            'id_user' => \App\Models\User::factory(),
            'id_genre' => \App\Models\Genre::factory(),
        ];
    }
}
