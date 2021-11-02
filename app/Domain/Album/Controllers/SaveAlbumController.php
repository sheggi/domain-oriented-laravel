<?php

namespace App\Domain\Album\Controllers;

use App\Domain\Album\Actions\SaveAlbumAction;
use App\Domain\Album\Data\CreateAlbumData;
use App\Http\Controllers\Controller;

class SaveAlbumController extends Controller
{
    public function __invoke(CreateAlbumData $createAlbumData, SaveAlbumAction $saveAlbumAction)
    {
        $albumData = $saveAlbumAction->execute($createAlbumData);

        return $albumData;
    }
}
