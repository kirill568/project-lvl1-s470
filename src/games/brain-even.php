<?php

namespace BrainGames\brainEven;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\flow\engine;

function isParity($number)
{
    return $number % 2 === 0;
}

function runGame()
{
    $questionsNumber = 3;
    $questions = [];
    $answers = [];
    $rule = 'Answer "yes" if number even otherwise answer "no".';
    for ($i = 1; $i <= $questionsNumber; $i += 1) {
        $question = rand(1, 30);
        $answer = isParity($question) ? 'yes' : 'no';
        $questions[] = $question;
        $answers[] = $answer;
    }
    engine($answers, $questions, $rule);
}
