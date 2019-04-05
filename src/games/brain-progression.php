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
    $member = $start;
    while (sizeof($progression) < 10) {
        $progression[] = $member;
        $member += $step;
    }
    return $progression;
}

function setHiddenElem($progression)
{
    $index = rand(0, sizeof($progression) - 1);
    $hiddenNumber = $progression[$index];
    $progression[$index] = "..";
    return [$hiddenNumber, $progression];
}

function runGame()
{
    $questionsAnswers = [];
    for ($i = 1; $i <= QUESTIONS_NUMBER; $i += 1) {
        $progression = makeProgression();
        [$answer, $question] = setHiddenElem($progression);
        $questionsAnswers[] = [implode(' ', $question), (string)$answer];
    }
    engine($questionsAnswers, DESCRIPTION);
}
