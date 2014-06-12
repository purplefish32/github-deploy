<?php

$app->get('/', function () use ($app, $config) {
    echo "WOOT!";
});

$app->post('/', function () use ($app, $config) {

    $json = $app->request()->getBody();

    $payload = json_decode($json);

    $app->log->info("payload : " . $json);
    $app->log->info("********************************");
    $app->log->info("payload repository name : " . $payload->repository->name);
    $app->log->info("********************************");
    $app->log->info("payload ref : " . $payload->ref);
});
