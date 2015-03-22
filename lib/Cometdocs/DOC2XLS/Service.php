<?php

namespace Cometdocs\DOC2XLS;

use Cometdocs\Common\Service\AbstractService;

class Service extends AbstractService
{

    public function __construct($client)
    {
        parent::__construct($client, 'CC-DOC2XLS');
    }

}
