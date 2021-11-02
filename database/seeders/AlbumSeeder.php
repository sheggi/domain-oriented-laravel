<?php

namespace Database\Seeders;

use App\Domain\Album\Models\Album;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Album::create(['title' => 'Feel Good Inc.', 'artist' => 'Gorillaz', 'published_at' => now()]);
        Album::factory()->count(15)->create();
    }
}
