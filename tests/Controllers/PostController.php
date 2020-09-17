<?php

namespace Actcmsvn\RestAPI\Tests\Controllers;

use Actcmsvn\RestAPI\ApiController;
use Actcmsvn\RestAPI\Tests\Models\DummyPost;

class PostController extends ApiController
{
    protected $model = DummyPost::class;
}