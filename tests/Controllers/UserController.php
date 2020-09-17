<?php

namespace Actcmsvn\RestAPI\Tests\Controllers;

use Actcmsvn\RestAPI\ApiController;
use Actcmsvn\RestAPI\Tests\Models\DummyUser;

class UserController extends ApiController
{
    protected $model = DummyUser::class;
}