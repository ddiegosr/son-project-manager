<?php

$app->midleware('before', function ($c) {
    session_start();
});

$app->midleware('before', function ($c) {
    if (!preg_match('/^\/api\/*./', $c['router']->getCurrentUrl())) {
        return;
    }
    $data = (new \App\Controllers\UsersController)->getCurrentUser($c);

    $c['loggedUser'] = function() use ($data) {
        return $data;
    };
});
/*
$app->midleware('after', function ($c) {
    echo 'after';
});

$app->midleware('after', function ($c) {
    echo 'after 2';
});*/