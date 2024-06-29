<?php

    namespace App\PHPFram;
    
    class HTTPErrorHandling
    {

        public static $ErrorHandlers = [];

        public static function RegisterErrorCallback(int $errorCode, callable $callback)
        {
            HTTPErrorHandling::$ErrorHandlers[(string)$errorCode] = $callback;
        }

        public static function HandleError(\Exception $exception)
        {

            $httpErrorCode = (string)$exception->getCode();

            if(!in_array($httpErrorCode, \array_keys(HTTPErrorHandling::$ErrorHandlers)))
            {
                return HTTPErrorHandling::DefaultErrorHandler($exception);
            }

            return HTTPErrorHandling::$ErrorHandlers[$exception->getCode()]();
        }

        public static function DefaultErrorHandler(\Exception $exception)
        {

            $httpErrorCode = $exception->getCode();
            http_response_code($httpErrorCode);
            return $httpErrorCode . " Error : " . HTTPErrorList::$ErrorMessages[$httpErrorCode];
        }
        
    }
    