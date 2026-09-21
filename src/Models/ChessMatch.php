<?php
namespace App\Models;

use App\Contracts\Reportable;

class ChessMatch implements Reportable
{
    protected Player $player1;
    protected Player $player2;
    protected ?string $result;

    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
        $this->result = null;
    }

    public function setResult(string $winnerName): void
    {
        $this->result = $winnerName;

        if ($winnerName === $this->player1->getName()) {
            $this->player1->recordResult(true);
            $this->player2->recordResult(false);
        } else if ($winnerName === $this->player2->getName()) {
            $this->player1->recordResult(false);
            $this->player2->recordResult(true);
        }
    }

    public function getSummary(): string
    {
        return $this->player1->getName() . " vs " . $this->player2->getName() . " — Winner: " . $this->result;
    }
}