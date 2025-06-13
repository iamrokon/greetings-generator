<?php

namespace Rokon\GreetingsGenerator\Commands;

use Illuminate\Console\Command;

class GreetingsGeneratorCommand extends Command
{
    public $signature = 'greetings-generator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
