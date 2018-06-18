<?php

namespace Endeavors\Interoperability\Services;

use Endeavors\Contracts\Interoperability\IService;

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
