<?php

$app->post('/', function () use ($app, $config) {

    $payload = $app->request()->getBody();

    $json = json_decode($payload);

    $app->log->info("payload : " . $json);
});
