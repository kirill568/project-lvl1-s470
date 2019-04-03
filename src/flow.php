<?php

namespace BrainGames\flow;

use function \cli\line;
use function \cli\prompt;

function engine ($answersQuestions, $questions, $ruleGame)
{	
	line('Welcome to the Brain Games!');
    line($ruleGame);
    $name = prompt('May I have your name?');
    line("Hello , {$name}");
    $questionsNumber = 3;
    for ($i = 0; $i < $questionsNumber; $i += 1) {
    	$currentAnswer = $answersQuestions[$i];
    	$currentQuestion = $questions[$i];
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