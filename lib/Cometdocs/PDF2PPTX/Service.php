<?php

namespace Cometdocs\PDF2PPTX;

use Cometdocs\Common\Service\AbstractService;

class Service extends AbstractService
{

    public function __construct($client)
    {
        parent::__construct($client, 'PDF2PPTX');
    }

}
