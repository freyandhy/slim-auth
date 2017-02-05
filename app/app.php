<?php

use Respect\Validation\Validator as v;

session_start();

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false,
        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'slimauth',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ]
    ],
]);

// Grab the container
$container = $app->getContainer();

// Start Settings Eloquent
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function($container) use ($capsule) {
    return $capsule;
};
// End Settings Eloquent

$container['view'] = function ($container) {
    // create new slim view twig instance
    $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', [
        'cache' => false,
    ]);

    $view->addExtension(new \Slim\Views\TwigExtension(
        $container->router,
        $container->request->getUri()
    ));

    return $view;
};

$container['validator'] = function($container) {
    return new App\Validation\Validator;
};

$container['HomeController'] = function($container) {
    return new \App\Controllers\HomeController($container);
};

$container['AuthController'] = function($container) {
    return new \App\Controllers\Auth\AuthController($container);
};

$container['csrf'] = function($container) {
    return new \Slim\Csrf\Guard;
};

// Start Middleware
$app->add(new \App\Middleware\ValidationErrorsMiddleware($container));
$app->add(new \App\Middleware\OldInputMiddleware($container));
// End Middleware

$app->add($container->csrf);

v::with('App\\Validation\\Rules\\');

require __DIR__ . '/routes.php';