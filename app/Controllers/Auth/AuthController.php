<?php

namespace App\Controllers\Auth;

use App\Models\User;
use App\Controllers\Controller;

class AuthController extends Controller
{
    public function getSignUp($req, $res)
    {
        return $this->view->render($res, 'auth/signup.twig');
    }

    public function postSignUp($req, $res)
    {
        $user = User::create([
            'email' => $req->getParam('email'),
            'name' => $req->getParam('name'),
            'password' => password_hash($req->getParam('password'), PASSWORD_DEFAULT),
        ]);

        return $res->withRedirect($this->router->pathFor('home'));
    }
}