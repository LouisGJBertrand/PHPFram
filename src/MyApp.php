<?php

namespace App;

use Exception;
use App\PHPFram\HTTPErrorHandling;

class MyApp
{
    
    public function Start()
    {
        try
        {

            require_once __DIR__."\\..\\routes\\routes.php";

        }
        catch(Exception $e)
        {

            print HTTPErrorHandling::HandleError($e);

        }


    }

    // Add app behaviour

}

