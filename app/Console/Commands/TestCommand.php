<?php

namespace App\Console\Commands;

use App\Domain\Album\Actions\GetInvalidAlbumAction;
use App\Domain\Album\Actions\GetMyFavoriteAlbumAction;
use App\Domain\Album\Actions\SaveAlbumAction;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    protected $signature = 'test';

    protected $description = 'test';

    public function handle(
        GetInvalidAlbumAction $getInvalidAlbumAction,
        GetMyFavoriteAlbumAction $getMyFavoriteAlbumAction,
        SaveAlbumAction $saveAlbumAction,
    ) {
        ray()->clearScreen();

        /* */
        /*

        // ide support

        $album = $getMyFavoriteAlbumAction->execute();

        ray($album->title);

        ray($album);


        /* */
        /*

        // ide support

        $albumData = $saveAlbumAction->execute();

        ray($albumData);

        /* */
        /*

        // action example

        $albums = $getInvalidAlbumAction->execute();

        ray($albums);

        /* */

        return Command::SUCCESS;
    }
}
