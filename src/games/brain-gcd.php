<?php

namespace BrainGames\brainGcd;

use function BrainGames\flow\engine;
use const BrainGames\flow\QUESTIONS_NUMBER;

const DESCRIPTION = "Find the greatest common divisor of given numbers.";

function getGcd($firstNumber, $secondNumber)
{
    return $secondNumber ? getGcd($secondNumber, $firstNumber % $secondNumber) : $firstNumber;
}

function runGame()
{
    $questionsAnswers = [];
    for ($i = 1; $i <= QUESTIONS_NUMBER; $i += 1) {
        $firstNumber = rand(1, 30);
        $secondNumber = rand(1, 30);
        $gcd = getGcd($firstNumber, $secondNumber);
        $question = "{$firstNumber} {$secondNumber}";
        $answer = "{$gcd}";
        $questionsAnswers[] = [$question, $answer];
    }
    engine($questionsAnswers, DESCRIPTION);
}
