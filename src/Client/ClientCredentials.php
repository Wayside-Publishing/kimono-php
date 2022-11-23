<?php

namespace Kimono\Client;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\StreamInterface;

/**
 * Class ClientCredentials
 * @package Kimono\Client
 */
class ClientCredentials extends \kamermans\OAuth2\GrantType\ClientCredentials
{

    /**
     * The underlying class defines `config` property as private and we cannot access it. Because of it, we need an extra variable
     * @var array
     */
    private $configOverride;

    /**
     * @param ClientInterface $client
     * @param array $config
     */
    public function __construct(ClientInterface $client, array $config)
    {
        parent::__construct($client, $config);

        $this->configOverride = $config;
    }


    /**
     * The main purpose of this class: improve the existing implementation to be able to work with Kimono Auth server
     * @return StreamInterface
     */
    protected function getPostBody()
    {
        $data = [
            'grant_type' => 'client_credentials',
            // This is the main purpose of this class: Kimono doesn't properly handle Basic Auth method and we have to pass id and secret in body
            'client_id' => $this->configOverride['client_id'],
            'client_secret' => $this->configOverride['client_secret']
        ];

        if ($this->configOverride['scope']) {
            $data['scope'] = $this->configOverride['scope'];
        }

        return Utils::streamFor(http_build_query($data, '', '&'));
    }
}
