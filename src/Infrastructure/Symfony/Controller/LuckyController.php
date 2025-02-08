<?php

namespace Infrastructure\Symfony\Controller;

use App\Casino\Roulette\RouletteApplication;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LuckyController extends AbstractController
{
    public function __construct(
        private readonly RouletteApplication $rouletteApplication
    ){}

    #[Route('/lucky/number', name: 'app_lucky_number')]
    public function number(): Response
    {
        $number = $this->rouletteApplication->turn();

        return new Response('<html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Your lucky number</title>
            </head>
        <body>
            <h1>Your lucky number is: '.$number.'</h1>
            </body>
        </html>');
    }
}