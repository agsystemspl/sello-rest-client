<?php

require __DIR__ . "/../vendor/autoload.php";

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

$client = new \AGSystems\REST\Toggl\Client(
    getenv('TOGGL_TOKEN')
);

var_export($client->me->get());
