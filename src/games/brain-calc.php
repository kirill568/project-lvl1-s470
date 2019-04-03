<?php

namespace BrainGames\brainCalc;

use function BrainGames\flow\engine;
use const BrainGames\flow\QUESTIONS_NUMBER;

const DESCRIPTION = 'What is the result of the expression?';

const SYMBOLS = ['+', '-', '*'];

function getOperation()
{
    $operation = rand(0, sizeof(SYMBOLS) - 1);
    return SYMBOLS[$operation];
}

function getResult($firstNumber, $secondNumber, $symbol)
{
    switch ($symbol) {
        case '+':
            return $firstNumber + $secondNumber;
            break;
        
        case '-':
            return $firstNumber - $secondNumber;
            break;
        case '*':
            return $firstNumber * $secondNumber;
            break;
    }
}

function runGame()
{
    $questionsAnswers = [];
    for ($i = 1; $i <= QUESTIONS_NUMBER; $i += 1) {
        $firstNumber = rand(1, 30);
        $secondNumber = rand(1, 30);
        $operation = getOperation($firstNumber, $secondNumber);
        $symbol = getOperation();
        $result = getResult($firstNumber, $secondNumber, $symbol);
        $answer = $result;
        $question = "{$firstNumber} {$symbol} {$secondNumber}";
        $questionsAnswers[] = [$question, "{$answer}"];

    }
    engine($questionsAnswers, DESCRIPTION);
}
