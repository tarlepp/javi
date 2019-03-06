<?php

namespace App\Controller;

use App\Service\TestService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="test")
     * @param \App\Service\TestService $service
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TestService $service)
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'content' => $service->checkThatSomethingIsOk('some-uri'),
        ]);
    }
}
