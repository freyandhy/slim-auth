<?php

namespace App\Controllers;

use App\Models\User;
use Slim\Views\Twig as View;

class HomeController extends Controller
{
    public function index($req, $res)
    {
        return $this->view->render($res, 'home.twig');
    }
}