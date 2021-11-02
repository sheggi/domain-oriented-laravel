<?php

namespace App\Domain\Album\Data;

use Carbon\Carbon;

class AlbumData extends \Spatie\LaravelData\Data
{
    public function __construct(
        public ?int $id,
        public ?string $title,
        public ?string $artist,
        public ?Carbon $published_at,
    ) {
    }
}
