<?php

namespace BrainGames\brainEven;

use function BrainGames\flow\engine;
use const BrainGames\flow\QUESTIONS_NUMBER;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function isParity($number)
{
    return $number % 2 === 0;
}

function runGame()
{
    $questionsAnswers = [];
    for ($i = 1; $i <= QUESTIONS_NUMBER; $i += 1) {
        $question = rand(1, 30);
        $answer = isParity($question) ? 'yes' : 'no';
        $questionsAnswers[] = [$question, $answer];
    }
    engine($questionsAnswers, DESCRIPTION);
}
