<?php

namespace Domain\Casino\Roulette;

interface IRouletteApplication
{
    public function turn(): int;
}