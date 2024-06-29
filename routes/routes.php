<?php

    // Using Simple Router
    use Pecee\SimpleRouter\SimpleRouter;

    // Declaring a route
    SimpleRouter::get('/', function() {
        return "Fram, v1.0, Super Lightweight Framework";
    });

    SimpleRouter::start();