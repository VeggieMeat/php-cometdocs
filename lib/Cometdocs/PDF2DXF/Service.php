<?php

namespace Cometdocs\PDF2DXF;

use Cometdocs\Common\Service\AbstractService;

class Service extends AbstractService
{

    public function __construct($client)
    {
        parent::__construct($client, 'PDF2DXF');
    }

}
