# Fram

Super lightweight PHP framework with basic error handling and routing.

This framework give you a base to develop your web app.

This framework does not include anything superficial, it's bare-bones routing and file structure.

# Requirements

Environment
```
- php v7.3.2 and above
- Composer
```

required libraries
```
- pecee/simple-router
- filp/whoops (dev)
```

# Installation

To create a project with this framework, execute the following composer command

`composer create-project louisgjbertrand/phpfram`

# Usage


## Starting the server

`php -S 127.0.0.1:8080 public/index.php`


## Adding routes

in routes/routes.php

```php
<?php

    // Using Simple Router
    use Pecee\SimpleRouter\SimpleRouter;

    // Declaring a route
    SimpleRouter::get('/', function() {
        return "Fram, v1.0, Super Lightweight Framework";
    });

    // Add your routes here:
    SimpleRouter::get('/example', function() {
        return "this is an example route";
    });

    SimpleRouter::start();
```

For more information on route declaration, head toward https://github.com/skipperbent/simple-php-router

## Handling PHP Errors

To handle PHP errors, simply register a callback function in routes.php

```php
<?php

    // Using Simple Router
    use Pecee\SimpleRouter\SimpleRouter;

    // Declaring a route
    SimpleRouter::get('/', function() {
        return "Fram, v1.0, Super Lightweight Framework";
    });

    // registering Errors
    

    SimpleRouter::start();
```

## ENV Variables

Environment variables are located in .env file.
The env file is formatted in INI. You can add your own environment variables by adding new lines.

```ini
APP_ENV=production ; either production / debug
APP_DEBUG=true

APP_TYPE=WWW ; either WWW / API / API-JSON
```
