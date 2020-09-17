<?php

namespace Actcmsvn\RestAPI\Tests\Controllers;

use Actcmsvn\RestAPI\ApiController;
use Actcmsvn\RestAPI\Tests\Models\DummyComment;

class CommentController extends ApiController
{
    protected $model = DummyComment::class;
}