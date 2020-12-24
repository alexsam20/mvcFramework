<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

/**
 * Class AuthController
 * @package app\controllers
 */
class AuthController extends Controller
{
    public function login()
    {
        return $this->render('login');
    }

    public function register(Request $request): string
    {
        if ($request->isPost()) {
            return 'Handle submitted data';
        }
        return $this->render('register');
    }
}