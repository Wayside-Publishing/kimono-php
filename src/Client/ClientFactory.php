<?php

namespace Kimono\Client;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use kamermans\OAuth2\OAuth2Middleware;

/**
 * Class ClientFactory
 * @package Kimono\Client
 */
class ClientFactory
{
    /**
     * @var array Client[]
     */
    private $clients = [];

    /**
     * @param string $clientId
     * @param string $clientSecret
     * @return CloudBoundClient
     */
    public function getCloudBoundClient(string $clientId, string $clientSecret): CloudBoundClient
    {
        $key = CloudBoundClient::class . $clientId;

        if (array_key_exists($key, $this->clients)) {
            return $this->clients[$key];
        }

        $authConfig = [
            "client_id" => $clientId,
            "client_secret" => $clientSecret,
        ];

        $authClient = new Client([
            'base_uri' => 'https://api.us2.kimonocloud.com/oauth/token',
            'verify' => false,
        ]);

        $oauth = new OAuth2Middleware(new ClientCredentials($authClient, $authConfig));

        $stack = HandlerStack::create();
        $stack->push($oauth);

        $client = new CloudBoundClient([
            'handler' => $stack,
            'auth' => 'oauth',
            'verify' => false,
        ]);

        $this->clients[$key] = $client;

        return $this->clients[$key];
    }
}
