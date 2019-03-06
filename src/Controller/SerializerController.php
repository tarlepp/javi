<?php

namespace App\Controller;

use App\Model\Foo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class SerializerController extends AbstractController
{
    /**
     * @Route("/serializer", name="serializer")
     * @param SerializerInterface $serializer
     *
     * @return Response
     */
    public function index(SerializerInterface $serializer): Response
    {
        $someJson = json_encode(['foo' => 'bar', 'bar' => ['foo' => 'foo', 'bar' => 'bar']]);

        /** @var Foo $foo */
        $foo = $serializer->deserialize($someJson, Foo::class, 'json');

        return $this->render('serializer/index.html.twig', [
            'controller_name' => 'SerializerController',
            'foo' => $foo,
            'foobar' => $foo->getBar()->getFoo() . $foo->getBar()->getBar(),
        ]);
    }
}
