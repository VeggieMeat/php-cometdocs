<?php

namespace Cometdocs\IMG2XLS;

use Cometdocs\Common\Service\AbstractService;

class Service extends AbstractService
{

    public function __construct($client)
    {
        parent::__construct($client, 'CC-IMG2XLS');
    }

}
