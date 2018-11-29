<?php

namespace App\Service;

use App\Client\TestClient;

class TestService
{
    private $client;

    /**
     * TestService constructor.
     *
     * @param \App\Client\TestClient $client
     */
    public function __construct(TestClient $client)
    {
        $this->client = $client;
    }

    public function getContents(): int
    {
        $response = $this->client->get('');

        // Do something with that response

        return $response->getStatusCode();
    }
}
