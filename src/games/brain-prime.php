<?php

namespace BrainGames\prime;

use function BrainGames\flow\engine;
use const BrainGames\flow\QUESTIONS_NUMBER;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($number)
{
    if ($number <= 1 ) {
        return false;
    }

    for ($i = 2; $i < $number; $i += 1) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function runGame()
{
    $questionsAnswers = [];
    for ($i = 1; $i <= QUESTIONS_NUMBER; $i += 1) {
        $number = rand(-10, 100);
        $prime = isPrime($number) ? "yes" : "no";
        $quiestion = (string) $number;
        $questionsAnswers[] = [$quiestion, $prime];
    }
    engine($questionsAnswers, DESCRIPTION);
}
