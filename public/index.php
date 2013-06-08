<?php

require_once __DIR__ . '/../vendor/autoload.php';

$container = new Respect\Config\Container(__DIR__ . '/../config/app.ini');

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
})->name('home');

$app->post('/form', function() use ($app, $container) {
    // Cadastrar informações
    if ($app->request()->isPost()) {
        try {
            $controller = new Infocorp\Controller\Create(
                $app->request(), 
                $container->connection
            );
            $controller->create();
            $app->flash('success', 'Seu cadastro foi concluido com sucesso');
        } catch (Exception $e) {
            $app->flash('error', $e->getMessage());
            $app->redirect('/');
        }
        $app->redirect('/success');  
    }
});

$app->get('/success', function() use ($app) {
    $app->render('sucesso.html');
})->name('success');

$app->run();