<?php

namespace Database\Factories;
use App\Models\Movies;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movies>
 */
class MoviesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>fake()->name(),
            'name'=>fake()->name(),
            'overview'=>fake()->paragraph(),
            'poster_path'=> Str::random(10),
            'id'=>rand(1,20000),
        ];
    }
}
