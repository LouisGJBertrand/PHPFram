<?php

    namespace App;

    class Env
    {
        public static function Initialize() {
            $envini = parse_ini_file(__DIR__."../../.env");
            $keys = array_keys($envini);

            for ($i=0; $i < count($envini); $i++) { 
                $_ENV[$keys[$i]] = $envini[$keys[$i]];
            }
        }
    }
    