<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index(): Response
    {
        return $this->json([
            [
                "id" => "mb1x35",
                "name" => "minibus",
                "coaches" => 1,
                "seats" => 35
            ],
            [
                "id" => "ge3x9",
                "name" => "galaxy_express",
                "coaches" => 3,
                "seats" => 9
            ],
            [
                "id" => "wc",
                "name" => "wabash_cannonball",
                "coaches" => 8,
                "seats" => 50
            ]
        ]);
    }
}
