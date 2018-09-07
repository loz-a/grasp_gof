<?php

spl_autoload_register(function ($className) {
    $file = str_replace('\\',DIRECTORY_SEPARATOR, $className);
    require_once $file . '.php';
});

