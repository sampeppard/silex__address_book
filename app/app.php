<?php

    require_once(__DIR__ . "/../vendor/autoload.php");
    require_once(__DIR__ . "/../src/Contact.php");

    session_start();

    $app = new Silex\Application();

    return $app;

?>
