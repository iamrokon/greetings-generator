<?php

namespace Rokon\GreetingsGenerator;

use Rokon\GreetingsGenerator\Commands\GreetingsGeneratorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GreetingsGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('greetings-generator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_greetings_generator_table')
            ->hasCommand(GreetingsGeneratorCommand::class);
    }
}
