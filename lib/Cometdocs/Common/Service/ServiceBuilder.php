<?php

namespace Cometdocs;

use Cometdocs\Common\Http\ClientInterface;

/**
 * Class ServiceBuilder
 * @package Cometdocs
 */
class ServiceBuilder
{

    /**
     * @param ClientInterface $client
     * @param $class
     * @return \Cometdocs\Common\Service\ServiceInterface
     */
    public static function factory(ClientInterface $client, $class)
    {
        return new $class($client);
    }

}