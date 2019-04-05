<?php

namespace BrainGames\calc;

use function BrainGames\flow\engine;
use const BrainGames\flow\QUESTIONS_NUMBER;

const DESCRIPTION = 'What is the result of the expression?';

const OPERATION = ['+', '-', '*'];

function getOperation()
{
    $operation = rand(0, sizeof(OPERATION) - 1);
    return OPERATION[$operation];
}

function getResult($firstNumber, $secondNumber, $operation)
{
    switch ($operation) {
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
        $operation = getOperation();
        $result = getResult($firstNumber, $secondNumber, $operation);
        $answer = (string) $result;
        $question = "$firstNumber $operation $secondNumber";
        $questionsAnswers[] = [$question, $answer];
    }
    engine($questionsAnswers, DESCRIPTION);
}
