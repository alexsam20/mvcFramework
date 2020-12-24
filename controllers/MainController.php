<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
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

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        echo '<pre>';
        var_dump($body);
        echo '</pre>';
        exit;
        return 'Handling submitted data';
    }
}