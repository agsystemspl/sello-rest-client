<?php

require __DIR__ . "/../vendor/autoload.php";

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

$client = new \AGSystems\Sello\REST\Client(
    getenv('API_TOKEN'),
    getenv('API_KEY')
);


// v3
var_export($client->v3->account->get());
// v5
var_export($client->v5->account->get());
