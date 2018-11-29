<?php

namespace App\Controller;

use App\Client\TestClient;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    /**
     * @Route("/", name="test")
     *
     * @param TestClient      $client
     * @param EngineInterface $templating
     *
     * @return Response
     */
    public function index(TestClient $client, EngineInterface $templating): Response
    {
        $response = $client->get('');

        return $templating->renderResponse('test/index.html.twig', [
            'controller_name' => 'TestController',
            'content' => $response->getBody(),
        ]);
    }
}
