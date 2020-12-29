<?php

namespace app\core;

/**
 * Class Controller
 * @package app\core
 */
class Controller
{
    public string $layout = 'main';

    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }

    public function render($view, $params = []): string
    {
        return Application::$app->router->renderView($view, $params);
    }
}