<?php

namespace Cometdocs\DOC2DOCX;

use Cometdocs\Common\Service\AbstractService;

class Service extends AbstractService
{

    public function __construct($client)
    {
        parent::__construct($client, 'DOC2DOCX');
    }

}
