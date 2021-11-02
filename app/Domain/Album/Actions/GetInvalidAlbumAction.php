<?php

namespace App\Domain\Album\Actions;

use App\Domain\Album\Data\AlbumData;
use App\Domain\Album\Models\Album;
use Spatie\LaravelData\DataCollection;

class GetInvalidAlbumAction
{
    /** @return DataCollection|Album[] */
    public function execute(): DataCollection|array
    {
        $albums = Album::all();

        $albums = $albums->filter(fn (Album $album) => ! $album->title || ! $album->artist);

        return AlbumData::collection($albums);
    }
}
