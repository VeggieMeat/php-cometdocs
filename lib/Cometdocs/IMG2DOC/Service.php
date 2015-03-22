<?php

namespace Cometdocs\IMG2DOC;

use Cometdocs\Common\Service\AbstractService;

class Service extends AbstractService
{

    public function __construct($client)
    {
        parent::__construct($client, 'CC-IMG2DOC');
    }

}
