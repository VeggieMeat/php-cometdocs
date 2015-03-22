<?php

namespace Cometdocs\Common\Http;

use Guzzle\Http\ClientInterface as GuzzleClientInterface;

interface ClientInterface extends GuzzleClientInterface
{
    public function getCallbackUrl();
    public function getTestMode();
    public function getToken();
}