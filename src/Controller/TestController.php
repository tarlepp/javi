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
        $response = $client->get('');

        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'content' => $response->getBody(),
        ]);
    }
}
