<?php

namespace BrainGames\progression;

use function BrainGames\flow\engine;
use const BrainGames\flow\QUESTIONS_NUMBER;

const LENGTH_PROGRESSION = 10;
const DESCRIPTION = "What number is missing in the progression?";

function makeProgression()
{
    $progression = [];
    $start = rand(1, 15);
    $step = rand(1, 6);
    for ($i = 0; $i < LENGTH_PROGRESSION; $i += 1) {
        $progression[] = $start + $step * $i;
    }
    return $progression;
}

function runGame()
{
    $questionsAnswers = [];
    for ($i = 1; $i <= QUESTIONS_NUMBER; $i += 1) {
        $progression = makeProgression();
        $hiddenElement = rand(0, LENGTH_PROGRESSION - 1);
        $answer = (string) $progression[$hiddenElement];
        $progression[$hiddenElement] = '..';
        $question = implode(' ', $progression);
        $questionsAnswers[] = [$question, $answer];
    }
    engine($questionsAnswers, DESCRIPTION);
}
