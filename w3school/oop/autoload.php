<?php

spl_autoload_register(function ($className) {
    $appDir = __DIR__ . "/app/";

    $directories = [
        $appDir . 'controllers/',
        $appDir . 'models/',
        $appDir . 'views/'
    ];
    
    foreach ($directories as $directory) {
        $file = $directory . $className . '.model.php';
        if (file_exists($file)) {
            require_once $file;
            return true;
        }
    }
    
    return false;
});