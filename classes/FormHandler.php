<?php

namespace classes;

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once BASE_PATH . 'classes/User.php';

use classes\User;

class FormHandler
{
    public static function signin(string $login, string $password): bool
    {   
        $user = User::findOne($login);

        if ($user->isNull()) return false;
        if (!password_verify($password, $user->getPassword())) return false;
        
        self::fillSession($user);

        return true;
    }
    
    public static function signout(): void
    {
        self::clearSession();
    }

    private static function fillSession(User $user): void
    {
        $_SESSION['user'] = [
            'id' => $user->getId(),
            'login' => $user->getLogin(),
        ];
    }

    private static function clearSession(): void
    {
        $_SESSION['user'] = [];
    }
}