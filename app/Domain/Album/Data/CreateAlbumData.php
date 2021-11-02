<?php

namespace App\Domain\Album\Data;

class CreateAlbumData extends \Spatie\LaravelData\Data
{
    public function __construct(
        public string $title,
        public string $artist,
        public bool $isPublished,
    ) {
    }
}
