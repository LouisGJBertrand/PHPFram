<?php

    require_once __DIR__."\\..\\vendor\\autoload.php";

    /** 
     * INIT Env Variables 
     */
    use App\Env;
    Env::Initialize();

    
    /** 
     * INIT Debug Behaviors
     */
        // Error Logging with Whoops
    if ((bool)$_ENV["APP_DEBUG"]) {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
    }

    /** 
     * INIT APP Type Behaviors
     */
        // Error Logging with Whoops
    if ($_ENV["APP_TYPE"] == "API-JSON") {
        header('Content-Type: application/json');
    }
    if ($_ENV["APP_TYPE"] == "API") {
        header('Content-Type: text/plain');
    }
    if ($_ENV["APP_TYPE"] == "WWW") {
        header('Content-Type: text/html');
    }
    
    
    /** 
     * INIT App
     */
    $app = new \App\MyApp();
    $app->Start();