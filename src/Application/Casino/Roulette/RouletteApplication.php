<?php

namespace App\Casino\Roulette;

use Domain\Casino\Roulette\Entity\Wheel;
use Domain\Casino\Roulette\IRouletteApplication;

readonly class RouletteApplication implements IRouletteApplication
{
    public function __construct(
        private Wheel $wheel
    ) {}

    public function turn(): int
    {
        return $this->wheel->turn();
    }
}