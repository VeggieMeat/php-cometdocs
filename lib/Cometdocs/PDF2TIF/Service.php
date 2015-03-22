<?php

namespace Cometdocs\PDF2TIF;

use Cometdocs\Common\Service\AbstractService;

class Service extends AbstractService
{

    public function __construct($client)
    {
        parent::__construct($client, 'PDF2TIF');
    }

}
