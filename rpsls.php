<?php

/*
 * The game was originally created by Sam Kass with Karen Bryla.
 * Rock, Paper, Scissors, Lizard, Spock is a game of chance
 * that expands the traditional game of Rock, Paper, Scissors.
 * Scissors cuts Paper
 * Paper covers Rock
 * Rock crushes Lizard
 * Lizard poisons Spock
 * Spock smashes Scissors
 * Scissors decapitates Lizard
 * Lizard eats Paper
 * Paper disproves Spock
 * Spock vaporizes Rock
 * (and as it always has) Rock crushes Scissors
 */

$guess = strtolower(readline("Rock, Paper, Scissors, Lizard or Spock? \n"));
$elements = [
    "rock" => 1,
    "paper" => 2,
    "scissors" => 3,
    "lizard" => 4,
    "spock" => 5,
];
$winningPairs = [
    "rock" => ["scissors", "lizard"],
    "paper" => ["rock", "spock"],
    "scissors" => ["paper", "lizard"],
    "lizard" => ["spock", "paper"],
    "spock" => ["rock", "scissors"],
];
$opponentElement = array_rand($elements);

if (!array_key_exists($guess, $elements)) {
    echo "Invalid choice. Please enter Rock, Paper, Scissors, Lizard, or Spock.\n";
    exit;
}
if ($guess == $opponentElement) {
    echo "It's a tie! You both chose $guess.\n";
} elseif (in_array($opponentElement, $winningPairs[$guess])) {
    echo "You win, $guess beats $opponentElement!\n";
} else {
    echo "You lose, $opponentElement beats $guess!\n";
}