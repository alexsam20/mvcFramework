<?php

namespace app\core\middlewares;

use app\core\Application;
use app\core\exception\ForbiddenException;

/**
 * Class AuthMiddleware
 * @package app\core\middlewares
 */
class AuthMiddleware extends BaseMiddleware
{
    public function __construct(public array $actions = [])
    {
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions, false)) {
                throw new ForbiddenException();
            }
        }
    }
}