<?php

namespace Actcmsvn\RestAPI\Exceptions\Parse;

use Actcmsvn\RestAPI\Exceptions\ApiException;
use Actcmsvn\RestAPI\Exceptions\ErrorCodes;

class InvalidOrderingDefinitionException extends ApiException
{
    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_ORDERING_INVALID;

    protected $message = "Ordering defined incorrectly";
}