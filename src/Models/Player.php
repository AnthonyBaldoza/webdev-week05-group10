<?php
namespace App\Models;

class Player {
protected string $name;
protected int $rating;
protected int $wins;
protected int $losses;

public function __construct(string $name, int $rating) {
    $this->name = $name;
    $this->rating = $rating;
    $this->wins = 0;
    $this->losses = 0;

}

public function recordResult(bool $won): void {
    if ($won) {
        $this->wins++;
    } else {
        $this->losses++;
    }

}

public function getWinRate(): float {
    $wins = $this->wins;
    $losses = $this->losses;
    if ($wins + $losses === 0) {
        return 0.0;
    }
    return ($wins / ($wins + $losses)) * 100;
}
public function getName(): string
{
    return $this->name;
}
}
