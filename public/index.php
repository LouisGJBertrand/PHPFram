<?php

    require_once "../vendor/autoload.php";

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
     * INIT App
     */
    $app = new \App\MyApp();
    $app->Start();