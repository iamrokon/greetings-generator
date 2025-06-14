<?php

use Rokon\GreetingsGenerator\Greetings;

it('test generates random greetings', function () {
    // $messages = ['Hi', 'Hello', 'How are you'];
    $messages = [
        'হ্যালো', 'কেমন আছেন', 'আসসালামু আলাইকুম',
        'Hi', 'Hello', 'How are you',
        'مرحبا', 'كيف حالك', 'السلام عليكم',
        'Merhaba', 'Nasılsın?', 'Selamlar',
        'Hola', '¿Cómo estás?', 'Saludos',
    ];
    expect(Greetings::greet())->toBeIn($messages);
});

it('test generates greetings in local language', function () {
    $messages = ['مرحبا', 'كيف حالك', 'السلام عليكم'];

    expect(Greetings::greet('ar'))->toBeIn($messages);

});
