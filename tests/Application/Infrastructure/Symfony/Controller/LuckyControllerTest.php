<?php

namespace Tests\Application\Infrastructure\Symfony\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LuckyControllerTest extends WebTestCase
{

    public function testNumber()
    {
        $client = static::createClient();

        $client->request('GET', '/lucky/number');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Your lucky number is: ');
    }
}
