<?php

namespace Cometdocs\Common\Http;

use Guzzle\Http\Client as GuzzleClient;

class Client extends GuzzleClient
{
    const VERSION = '0.0.0';

    public function __construct($baseUrl)
    {
        parent::__construct($baseUrl);
    }

    public function getDefaultUserAgent()
    {
        return 'Cometdocs/' . self::VERSION . ' ' . parent::getDefaultUserAgent();
    }

}