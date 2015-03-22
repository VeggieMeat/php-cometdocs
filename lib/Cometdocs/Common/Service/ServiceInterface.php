<?php

namespace Cometdocs\Common\Service;

use Cometdocs\Common\Http\ClientInterface;

/**
 * Interface ServiceInterface
 * @package Cometdocs
 */
interface ServiceInterface
{

    /**
     * @param $file
     * @return mixed
     */
    public function convert($file);

    /**
     * @param $url
     * @return mixed
     */
    public function convertFromUrl($url);

    /**
     * @return mixed
     */
    public function getClient();

    /**
     * @param ClientInterface $client
     * @return mixed
     */
    public function setClient(ClientInterface $client);

    /**
     * @return mixed
     */
    public function getUrl();

}