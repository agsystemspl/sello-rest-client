<?php

require __DIR__ . "/../vendor/autoload.php";

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

$client = new \AGSystems\REST\Sello\Client(
    getenv('API_TOKEN'),
    getenv('API_KEY')
);

var_export($client->me->get());
