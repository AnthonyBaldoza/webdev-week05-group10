<?php

require __DIR__ . '/vendor/autoload.php';

use App\Models\Player;
use App\Models\ChessMatch;

$player1 = new Player("Tune", 1500);
$player2 = new Player("Aaron", 1450);

$match1 = new ChessMatch($player1, $player2);
$match1->setResult("Tune");

echo $match1->getSummary() . PHP_EOL;
echo $player1->getName() . " win rate: " . $player1->getWinRate() . "%" . PHP_EOL;
echo $player2->getName() . " win rate: " . $player2->getWinRate() . "%" . PHP_EOL;

$match2 = new ChessMatch($player1, $player2);
$match2->setResult("Aaron");

echo $match2->getSummary() . PHP_EOL;
echo $player1->getName() . " win rate: " . $player1->getWinRate() . "%" . PHP_EOL;
echo $player2->getName() . " win rate: " . $player2->getWinRate() . "%" . PHP_EOL;