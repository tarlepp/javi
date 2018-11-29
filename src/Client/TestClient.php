<?php

namespace App\Client;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

class TestClient extends Client
{
    /**
     * @param string|UriInterface $uri
     *
     * @return ResponseIntesrface
     */
    public function customGet($uri): ResponseInterface
    {
        return $this->get($uri, ['http_errors' => false]);
    }
}
