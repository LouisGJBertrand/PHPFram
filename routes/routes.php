<?php

    // Create Router instance
    $router = new \Bramus\Router\Router();

    // Define routes
    // ...
    $router->get("/", function () {
        echo "Fram, v1.0, Super Lightweight Framework";
    });

    // HTTP 404 Error Route Handler
    $router->set404(function() {
        header('HTTP/1.1 404 Not Found');
        
        // Replace by your own code!
        throw new Exception("HTTP Error 404: Route not found", 404);
    });



    // Run it!
    $router->run();