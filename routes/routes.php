<?php

    // Using Simple Router
    use Pecee\SimpleRouter\SimpleRouter;

    // Default Route
    SimpleRouter::get('/', function() {
        return "Fram, v1.0, Super Lightweight Framework";
    });

    // Declaring a route
    SimpleRouter::get('/test', function() {
        return "custom test route";
    });

    // Redirection
    SimpleRouter::redirect('/redirect', "/test");
    
    App\PHPFram\HTTPErrorHandling::RegisterErrorCallback(404, function() {
        return "Custom Error Definition";
    });

    SimpleRouter::start();