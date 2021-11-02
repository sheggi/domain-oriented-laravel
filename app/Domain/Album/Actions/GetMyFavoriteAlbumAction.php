<?php

namespace App\Domain\Album\Actions;

use App\Domain\Album\Data\AlbumData;
use App\Domain\Album\Models\Album;

class GetMyFavoriteAlbumAction
{
    public function execute(): ?AlbumData
    {
        $album = Album::firstWhere('artist', 'Gorillaz');

        return AlbumData::from($album);
    }
}
