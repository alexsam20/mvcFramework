<?php

namespace app\models;

use app\core\Application;
use app\core\Model;
use app\core\Request;

class ContactForm extends Model
{
    public string $subject = '';
    public string $email = '';
    public string $body = '';

    public function rules(): array
    {
        return [
            'subject' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'body' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 25]],
        ];
    }
    public function labels(): array
    {
        return [
            'subject' => 'Enter your subject',
            'email' => 'Your email',
            'body' => 'Body text',
        ];
    }

    public function send()
    {
        return true;
    }
}