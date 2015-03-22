<?php

namespace Cometdocs\Common\Service;

use Cometdocs\Common\Http\ClientInterface;
use Guzzle\Http\Url;
use Cometdocs\Cometdocs;
use Cometdocs\Common\Service\ServiceInterface;
use Cometdocs\Common\Http\Request;

/**
 * Class AbstractService
 * @package Cometdocs\Common\Service
 */
abstract class AbstractService implements ServiceInterface
{
    /**
     * @var
     */
    protected $callbackUrl;
    /**
     * @var ClientInterface
     */
    protected $client;
    /**
     * @var
     */
    protected $conversionType;
    /**
     * @var
     */
    protected $request;
    /**
     * @var
     */
    protected $testMode;

    /**
     * @param ClientInterface $client
     * @param $conversionType
     */
    public function __construct(ClientInterface $client, $conversionType)
    {
        $this->client = $client;
        $this->conversionType = $conversionType;
        $this->callbackUrl = $client->getCallbackUrl();
        $this->testMode = $client->getTestMode();
    }

    /**
     * @return ClientInterface
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param ClientInterface $client
     */
    public function setClient(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @param null $path
     * @param null $query
     * @return Url
     */
    public function getUrl($path = null, $query = null)
    {
        return Url::factory(Cometdocs::COMETDOCS_CONVERSION_ENDPOINT)->addPath($path)->setQuery($query);
    }

    /**
     * @param $file
     */
    public function convert($file)
    {
        $request = $this->buildRequest('convert');
        $request->addPostFile(array(
            'file' => $file,
        ));

        $response = $request->send();

    }

    /**
     * @param $url
     */
    public function convertFromUrl($url)
    {
        $request = $this->buildRequest('convertFromUrl');
        $request->setPostField('url', $url);

        $response = $request->send();
    }

    /**
     * @param $uri
     * @return \Guzzle\Http\Message\EntityEnclosingRequestInterface
     */
    protected function buildRequest($uri)
    {
        $request = Request::factory($this->client, $uri);
        $request->setPostField('conversionType', $this->conversionType);

        if (isset($this->callbackUrl)) {
            $request->setPostField('callbackUrl', $this->callbackUrl);
        }

        if ($this->testMode == TRUE) {
            $request->setPostField('testMode', $this->testMode);
        }

        return $request;
    }

}