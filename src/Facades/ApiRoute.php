<?php

namespace Actcmsvn\RestAPI\Facades;

use Actcmsvn\RestAPI\Routing\ApiRouter;
use Illuminate\Support\Facades\Facade;

class ApiRoute extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ApiRouter::class;
    }
}