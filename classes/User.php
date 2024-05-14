<?php

namespace classes;

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once BASE_PATH . '/lib/Db.php';

use lib\Db;
use PDOException;

class NullUser extends User
{
    public function __construct() {
        parent::__construct(0, '', '');
    }

    public function isNull(): bool
    {
        return true;
    }
}

class User
{
    protected static $db;
    protected int $id;
    protected string $login;
    protected string $password_hash;

    protected function __construct(int $id, string $login, string $password_hash) {
        $this->id = $id;
        $this->login = $login;
        $this->password_hash = $password_hash;
    }

    private static function initDatabase(): void
    {
        self::$db = (self::$db) ? self::$db : new Db;
    }

    public static function findOne(string $login): self 
    {
        self::initDatabase();

        $user = self::$db->row('SELECT * FROM `users` WHERE `login` = :login;', ['login' => $login]);

        if ($user) {
            $user = $user[0];
            return new static($user['id'], $user['login'], $user['password']);
        }

        return new NullUser;
    }

    public function isNull(): bool
    {
        return false;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getPassword(): string
    {
        return $this->password_hash;
    }
}