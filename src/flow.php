<?php

namespace BrainGames\flow;

use function \cli\line;
use function \cli\prompt;

const QUESTIONS_NUMBER = 3;

function engine($questionsAnswers, $ruleGame)
{
    line('Welcome to the Brain Games!');
    line($ruleGame);
    $name = prompt('May I have your name?');
    line("Hello , {$name}");
    for ($i = 0; $i < QUESTIONS_NUMBER; $i += 1) {
        $currentAnswer = $questionsAnswers[$i][1];
        $currentQuestion = $questionsAnswers[$i][0];
        line("Question: {$currentQuestion}");
        $userAnswer = prompt("Your answer");
        if ($userAnswer === $currentAnswer) {
            line('Correct!');
        } else {
            line("'{$userAnswer}' is now wrong answer ;(. Correct answer was '{$currentAnswer}'");
            line("Let's try again, {$name}");
            return;
        }
    }
    line("Congratulations, {$name}!");
}
