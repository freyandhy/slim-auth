<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;

class AuthController extends Controller
{
    public function getSignUp($req, $res)
    {
        return $this->view->render($res, 'auth/signup.twig');
    }

    // public function postSignUp()
    // {

    // }
}