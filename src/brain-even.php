<?php

namespace BrainGames\parityCheck;

use function \cli\line;
use function \cli\prompt;

function isParity($number)
{
    return $number % 2 === 0;
}

function runGame()
{
    line('Welcome to the Brain Games!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello , {$name}");
    $questions = 3;
    for ($i = 1; $i <= $questions; $i++) {
        $currentNumber = rand(1, 30);
        $correctAnswer = isParity($currentNumber) ? 'yes' : 'no';
        line("Question: {$currentNumber}");
        $userAnswer = prompt("Your answer");
        if ($userAnswer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$userAnswer}' is now wrong answer ;(. Correct answer was '{$correctAnswer}'");
            line("Let's try again, {$name}");
            return;
        }
    }
    line("Congratulations, {$name}!");
}
