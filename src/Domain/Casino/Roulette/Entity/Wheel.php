<?php
namespace Domain\Casino\Roulette\Entity;
use Random\RandomException;

class Wheel
{
    /**
     * Turn the wheel and return the number where the ball lands.
     * @throws RandomException
     */
    public function turn(): int
    {
        return random_int(0, 36);
    }
}