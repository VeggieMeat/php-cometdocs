<?php

namespace Cometdocs\PDF2XLS;

use Cometdocs\Common\Service\AbstractService;

class Service extends AbstractService
{

    public function __construct($client)
    {
        parent::__construct($client, 'PDF2XLS');
    }

}