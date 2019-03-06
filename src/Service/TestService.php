<?php

namespace App\Service;

use App\Client\TestClient;
use Psr\Http\Message\UriInterface;

class TestService
{
    private $client;

    /**
     * TestService constructor.
     *
     * @param TestClient $client
     */
    public function __construct(TestClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param string|UriInterface $uri
     *
     * @return string
     */
    public function checkThatSomethingIsOk($uri): string
    {
        // I'm making request that is not going to return HTTP 200 status code
        $response = $this->client->customRequest($uri);

        // Do something with that response and determine if all is ok or not

        return $response->getStatusCode() === 200 ? 'All is ok' : 'There is some error';
    }
}
