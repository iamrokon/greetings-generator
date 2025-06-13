<?php

use Rokon\GreetingsGenerator\Greetings;

it('test generates random greetings', function () {
    $messages = ['Hi', 'Hello', 'How are you'];
    expect(Greetings::greet())->toBeIn($messages);
});
