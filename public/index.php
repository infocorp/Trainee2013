<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Slim\Slim();

$app->config(array(
    'debug' => true,
    'template.path' => __DIR__ . '/templates',
));

$app->add(new Slim\Middleware\SessionCookie(array(
    'expires' => '20 minutes',
    'path' => '/',
    'domain' => null,
    'secure' => false,
    'httponly' => false,
    'name' => 'slim_session',
    'secret' => 'CHANGE_ME',
    'cipher' => MCRYPT_RIJNDAEL_256,
    'cipher_mode' => MCRYPT_MODE_CBC
)));

$app->get('/', function() use ($app){
    $app->render('form.html');
});

$app->post('/form', function() use ($app) {
    // Cadastrar informações
    if ($app->request()->isPost()) {
        $persist = new Infocorp\Persist($app->request());
    }
});

$app->run();