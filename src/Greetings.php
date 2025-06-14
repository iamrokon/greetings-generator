<?php

namespace Rokon\GreetingsGenerator;

class Greetings
{
    // private static $messages = ['Hi', 'Hello', 'How are you'];
    private static $greetings = [
        'bn' => ['হ্যালো', 'কেমন আছেন', 'আসসালামু আলাইকুম'],
        'en' => ['Hi', 'Hello', 'How are you'],
        'ar' => ['مرحبا', 'كيف حالك', 'السلام عليكم'],
        'tr' => ['Merhaba', 'Nasılsın?', 'Selamlar'],
        'es' => ['Hola', '¿Cómo estás?', 'Saludos'],
    ];

    public static function greet(?string $language = null): string
    {
        $selectedLanguage = $language ?? array_rand(self::$greetings);
        $selectedGreetings = self::$greetings[$selectedLanguage] ?? self::$greetings['en'];

        return $selectedGreetings[array_rand($selectedGreetings)];
        // return self::$messages[array_rand(self::$messages)];
    }
}
