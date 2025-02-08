<?php

namespace Tests\Unit\Domain\Casino\Roulette\Entity;

use Domain\Casino\Roulette\Entity\Wheel;
use PHPUnit\Framework\TestCase;

class WheelTest extends TestCase
{
    public function testTurn()
    {
        $wheel = new Wheel();
        $number = $wheel->turn();
        $this->assertGreaterThanOrEqual(0, $number);
        $this->assertLessThanOrEqual(36, $number);
    }
}
