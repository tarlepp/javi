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

    public function checkThatSomethingIsOk(): string
    {
        // I'm making request that is not going to return HTTP 200 status code
        $response = $this->client->get('url-to-get-some-data', ['http_errors' => false]);

        // Do something with that response and determine if all is ok or not

        return $response->getStatusCode() === 200 ? 'All is ok' : 'There is some error';
    }
}
