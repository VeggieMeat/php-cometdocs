<?php

namespace Cometdocs\ToPDF;

use Cometdocs\Common\Service\AbstractService;

class Service extends AbstractService
{

    public function __construct($client)
    {
        parent::__construct($client, '2PDF');
    }

}
