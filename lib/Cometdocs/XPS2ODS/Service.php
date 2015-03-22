<?php

namespace Cometdocs\XPS2ODS;

use Cometdocs\Common\Service\AbstractService;

class Service extends AbstractService
{

    public function __construct($client)
    {
        parent::__construct($client, 'XPS2ODS');
    }

}
