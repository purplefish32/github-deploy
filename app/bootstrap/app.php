<?php

$app->get('/', function () use ($app, $config) {
    echo "WOOT!";
});

$app->post('/', function () use ($app, $config) {

    $payload = $app->request()->getBody();

    $json = json_decode($payload);

    $app->log->info("payload : " . $json);
});
