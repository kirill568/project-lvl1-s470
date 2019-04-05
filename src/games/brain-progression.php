<?php

namespace BrainGames\brainProgression;

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

function setHiddenElem($progression)
{
    $index = rand(0, sizeof($progression) - 1);
    $hiddenNumber = $progression[$index];
    return $hiddenNumber;
}

function transformProgression($hiddenNumber, $progression)
{
    $index = array_search($hiddenNumber, $progression);
    $progression[$index] = '..';
    return $progression;
}

function runGame()
{
    $questionsAnswers = [];
    for ($i = 1; $i <= QUESTIONS_NUMBER; $i += 1) {
        $progression = makeProgression();
        $hiddenElement = (string)setHiddenElem($progression);
        $question = implode(' ', transformProgression($hiddenElement, $progression));
        $questionsAnswers[] = [$question, $hiddenElement];
    }
    engine($questionsAnswers, DESCRIPTION);
}
