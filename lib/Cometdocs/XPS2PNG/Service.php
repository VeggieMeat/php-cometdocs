<?php

namespace Cometdocs\XPS2PNG;

use Cometdocs\Common\Service\AbstractService;

class Service extends AbstractService
{

    public function __construct($client)
    {
        parent::__construct($client, 'XPS2PNG');
    }

}
