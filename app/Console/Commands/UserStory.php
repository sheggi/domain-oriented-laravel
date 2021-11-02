<?php

namespace App\Console\Commands;

use App\Domain\Album\Actions\DeleteInvalidAlbumsAction;
use Illuminate\Console\Command;

class UserStory extends Command
{
    protected $signature = 'user-story';

    protected $description = 'user story';

    public function handle(
        DeleteInvalidAlbumsAction $deleteInvalidAlbumsAction,
    ) {
        ray()->clearScreen();

        // user can can delete invalid albums
        $deleteInvalidAlbumsAction->execute();

        return Command::SUCCESS;
    }
}
