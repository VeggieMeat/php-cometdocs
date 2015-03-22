<?php

namespace Cometdocs\XPS2TIF;

use Cometdocs\Common\Service\AbstractService;

class Service extends AbstractService
{

    public function __construct($client)
    {
        parent::__construct($client, 'XPS2TIF');
    }

}
