<?php
/**
 * HomeCredit API Client
 */
namespace Homecredit\Api\Exception;

class ClientException extends \Exception
{
    public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
