<?php

namespace App\Controller;

use App\Client\TestClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="test")
     * @param \App\Client\TestClient $client
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TestClient $client)
    {
        $response = $client->get(''); // Default one

        // 1. solution: override options on your `get` method call
        //$response = $client->get('', ['http_errors' => false]);

        // 2. solution: use custom method on that `TestClient` service
        //$response = $client->customGet('');

        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'content' => $response->getBody(),
        ]);
    }
}
