<?php

namespace BrainGames\parityCheck;

use function \cli\line;
use function \cli\prompt;

function randomNumber ($min = 1, $max = 30)
{
	return rand($min, $max);
}

function parity ($number)
{
	return $number % 2 === 0 ? 'yes' : 'no';
}

function runGame ()
{
	line('Welcome to the Brain Games!');
	line('Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello , {$name}");
	$question = 1;
	while ($question <= 3) {
		$currentNumber = randomNumber();
		$parity = parity($currentNumber);
		line("Question: {$currentNumber}");
		$answer = prompt("Your answer");
		if ($answer === $parity) {
			line('Correct!');
		} else {
			line("'{$answer}' is now wrong answer ;(. Correct answer was '{$parity}'");
			line("Let's try again, {$name}");
			return;
		}
		$question += 1;
	}
	line("Congratulations, {$name}!");
}
