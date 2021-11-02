<?php

namespace App\Domain\Album\Actions;

use App\Domain\Album\Data\AlbumData;
use App\Domain\Album\Data\CreateAlbumData;
use App\Domain\Album\Models\Album;

class SaveAlbumAction
{
    public function execute(CreateAlbumData $createAlbumData): AlbumData
    {
        $albumData = AlbumData::from($createAlbumData);

        $albumData->published_at = $createAlbumData->isPublished ? now() : null;

        $album = Album::create($albumData->toArray());

        return AlbumData::from($album);
    }
}
