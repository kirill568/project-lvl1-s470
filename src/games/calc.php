<?php

namespace BrainGames\calc;

use function BrainGames\flow\engine;
use const BrainGames\flow\QUESTIONS_NUMBER;

const DESCRIPTION = 'What is the result of the expression?';

const OPERATION = ['+', '-', '*'];

function getResult($firstNumber, $secondNumber, $operation)
{
    switch ($operation) {
        case '+':
            return $firstNumber + $secondNumber;
        case '-':
            return $firstNumber - $secondNumber;
        case '*':
            return $firstNumber * $secondNumber;
    }
}

function runGame()
{
    $questionsAnswers = [];
    for ($i = 1; $i <= QUESTIONS_NUMBER; $i += 1) {
        $firstNumber = rand(1, 30);
        $secondNumber = rand(1, 30);
        $operation = OPERATION[array_rand(OPERATION, 1)];
        $result = getResult($firstNumber, $secondNumber, $operation);
        $answer = (string) $result;
        $question = "$firstNumber $operation $secondNumber";
        $questionsAnswers[] = [$question, $answer];
    }
    engine($questionsAnswers, DESCRIPTION);
}
