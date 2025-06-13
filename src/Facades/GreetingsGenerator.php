<?php

namespace Rokon\GreetingsGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rokon\GreetingsGenerator\GreetingsGenerator
 */
class GreetingsGenerator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Rokon\GreetingsGenerator\GreetingsGenerator::class;
    }
}
