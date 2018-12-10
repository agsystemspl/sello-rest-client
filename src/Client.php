<?php

namespace AGSystems\REST\Sello;

use AGSystems\REST\AbstractClient;

class Client extends AbstractClient
{
    protected $apiToken;
    protected $apiKey;

    public function __construct($apiToken, $apiKey)
    {
        $this->apiToken = $apiToken;
        $this->apiKey = $apiKey;
    }

    protected function withOptions()
    {
        return [
            'base_uri' => 'https://api.sello.io/',
            'headers' => [
                'token' => $this->apiToken, // v3
                'key' => $this->apiKey, // v3
                'authorization' => $this->apiToken . ':' . $this->apiKey, // v5
            ],
        ];
    }
}
