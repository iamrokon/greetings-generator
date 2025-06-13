<?php

namespace Rokon\GreetingsGenerator;

class Greetings
{
    private static $messages = ['Hi', 'Hello', 'How are you'];

    public static function greet()
    {
        return self::$messages[array_rand(self::$messages)];
    }
}
