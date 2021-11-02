<?php

namespace App\Domain\Album\Actions;

use App\Domain\Album\Models\Album;

class DeleteInvalidAlbumsAction
{
    public function __construct(
        protected GetInvalidAlbumAction $getInvalidAlbumAction,
    ) {
    }

    public function execute(
    ) {
        $albums = $this->getInvalidAlbumAction->execute();

        $ids = $albums->toCollection()->pluck('id');

        Album::query()->whereIn('id', $ids)->delete();
    }
}
