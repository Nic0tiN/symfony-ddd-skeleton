<?php

namespace Tests\Integration\Application\Casino\Roulette;

use App\Casino\Roulette\RouletteApplication;
use Domain\Casino\Roulette\Entity\Wheel;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class RouletteApplicationTest extends KernelTestCase
{

    public function testTurn()
    {
        $wheel = new Wheel();
        $rouletteApplication = new RouletteApplication($wheel);
        $number = $rouletteApplication->turn();
        $this->assertGreaterThanOrEqual(0, $number);
        $this->assertLessThanOrEqual(36, $number);
    }
}
