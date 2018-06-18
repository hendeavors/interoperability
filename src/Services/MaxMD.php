<?php

namespace Endeavors\Interoperability\Services;

use Endeavors\Contracts\IService;

class MaxMD implements IService
{    
    public function name()
    {
        return "MaxMD";
    }

    public function identifier()
    {
        return "directmdemail";
    }
}
