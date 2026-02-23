<?php

spl_autoload_register(function ($class) {
    $root = dirname(__DIR__);
    $path = $root.'/'.str_replace('\\', '/', lcfirst($class).'.php');
    require_once $path;
});
