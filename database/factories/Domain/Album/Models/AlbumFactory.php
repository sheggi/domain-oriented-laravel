<?php

namespace Database\Factories\Domain\Album\Models;

use App\Domain\Album\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->optional(0.8)->text(100),
            'artist' => $this->faker->optional(0.8)->name(),
            'published_at' => $this->faker->optional(0.8)->dateTime(),
        ];
    }
}
