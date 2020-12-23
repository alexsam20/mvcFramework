<?php

namespace app\controllers;

use app\core\Controller;
/**
 * Class MainController
 * @package app\controllers
 */
class MainController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'Alexandr'
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact', []);
    }

    public function handleContact()
    {
        return 'Handling submitted data';
    }
}