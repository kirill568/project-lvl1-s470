<?php

namespace BrainGames\brainCalc;

use function BrainGames\flow\engine;

function getOperationAndResult($firstNumber, $secondNumber)
{
    $operations = [
    ['+' => $firstNumber + $secondNumber],
    ['-' => $firstNumber - $secondNumber],
    ['*' => $firstNumber * $secondNumber]
    ];
    $operation = rand(0, 2);
    return $operations[$operation];
}

function runGame()
{
    $questions = [];
    $answers = [];
    $rule = 'What is the result of the expression?';
    $questionsNumber = 3;
    for ($i = 1; $i <= $questionsNumber; $i += 1) {
        $firstNumber = rand(1, 30);
        $secondNumber = rand(1, 30);
        $operationAndResult = getOperationAndResult($firstNumber, $secondNumber);
        $operation = key($operationAndResult);
        $answer = $operationAndResult[$operation];
        $question = "{$firstNumber} {$operation} {$secondNumber}";
        $questions[] = $question;
        $answers[] = "{$answer}";
    }
    engine($answers, $questions, $rule);
}
