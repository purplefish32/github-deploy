<?php

$app->get('/', function () use ($app, $config) {
    echo "WOOT!";
});

$app->post('/', function () use ($app, $config) {

    $json = $app->request()->getBody();

    $payload = json_decode($json);

    $app->log->info("payload repository name : " . $payload->repository->name);
    $app->log->info("payload ref : " . $payload->ref);

    $prefix = 'refs/heads/';

    $branch = '';

    if (substr($payload->ref, 0, strlen($prefix)) == $prefix) {
        $branch = substr($payload->ref, strlen($prefix));
    }

    $app->log->info("payload branch : " . $branch);

});
