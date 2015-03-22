<?php

namespace Cometdocs\Common\Http;

use Cometdocs\Common\Http\ClientInterface;

/**
 * Class Request
 * @package Cometdocs\Common\Http
 */
class Request
{
    /**
     * @param ClientInterface $client
     * @param string $uri
     * @return \Guzzle\Http\Message\EntityEnclosingRequestInterface
     */
    public static function factory(ClientInterface $client, $uri)
    {
        $request = $client->post('convert');
        $request->addPostFields(array(
            'token' => $client->getToken(),
        ));

        return $request;
    }
}