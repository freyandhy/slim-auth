<?php

$app->get('/', 'HomeController:index');

// Start Auth Route
$app->get('/auth/signup', 'AuthController:getSignUp')->setName('auth.signup');
$app->post('/auth/signup', 'AuthController:postSignUp');
// End Auth Route
