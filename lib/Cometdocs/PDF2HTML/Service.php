<?php

namespace Cometdocs\PDF2HTML;

use Cometdocs\Common\Service\AbstractService;

class Service extends AbstractService
{

    public function __construct($client)
    {
        parent::__construct($client, 'PDF2HTML');
    }

}
