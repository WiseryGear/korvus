<?php

namespace classes;

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once BASE_PATH . '/lib/Db.php';

use lib\Db;

class NullNews extends News
{
    public function __construct() {
        parent::__construct(0, '', '', '');
    }

    public function isNull(): bool 
    {
        return true;
    }
}

class News
{
    protected static $db;
    protected int $id;
    protected string $title;
    protected string $description;
    protected string $photo;

    protected function __construct(int $id, string $title, string $description, string $photo) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->photo = $photo;
    }

    private static function initDatabase(): void
    {
        self::$db = (self::$db) ? self::$db : new Db;
    }

    public function isNull(): bool
    {
        return false;
    }

    public static function findOne(int $id): self
    {
        self::initDatabase();
        
        $news = self::$db->row('SELECT * FROM `news` WHERE `id` = :id;', ['id' => $id]);
        
        if ($news) {
            $news = $news[0];
            return new static($news['id'], $news['title'], $news['description'], $news['photo']);
        }

        return new NullNews;
    }

    public static function insert(string $title, string $description, string $photo): self
    {
        self::initDatabase();
        
        $params = [
            'title'       => $title,
            'description' => $description,
            'photo'       => $photo,
        ];
        
        self::$db->row('INSERT INTO `news` (`title`, `description`, `photo`) VALUES (:title, :description, :photo);', $params);
    
        return self::findOne(self::$db->db->lastInsertId());
    }

    public static function findAll(): array
    {
        self::initDatabase();

        $news = self::$db->row('SELECT * FROM `news` ORDER BY id DESC;');

        $array = [];

        foreach ($news as $value) {
            $array[] = new static($value['id'], $value['title'], $value['description'], $value['photo']);
        }

        return $array;
    }

    // Должен быть метод не 'row'
    public function update(?string $title, ?string $description, ?string $photo): self
    {
        $params = [
            'id'          => $this->id,
            'title'       => $title,
            'description' => $description,
            'photo'       => $photo,
        ];

        self::$db->query('UPDATE `news` SET `title` = COALESCE(:title, `title`), `description` = COALESCE(:description, `description`), `photo` = COALESCE(:photo, `photo`) WHERE `id` = :id;', $params);

        return self::findOne($this->id);
    }

    // return возвращает не всегда верный результат
    // Должен быть метод не 'query'
    public function delete(): bool
    {
        $result = self::$db->query('DELETE FROM `news` WHERE `id` = :id;', ['id' => $this->id]);

        return ($result) ? true : false;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    // public function setTitle($value): bool
    // {
    //     Product::$db->db->query('UPDATE `news` SET `title` = COALESCE(:title, `title`) WHERE `id` = :id;', ['title' => $value]);
    // }

    public function getDescription(): string
    {
        return $this->description;
    }

    // public function setDescription($value): bool
    // {
    //     Product::$db->query('UPDATE `news` SET `title` = COALESCE(:title, `title`) WHERE `id` = :id;', ['title' => $value]);
    // }

    public function getPhoto(): string
    {
        return $this->photo;
    }

    // public function setPhoto($value): bool
    // {
    //     Product::$db->query('UPDATE `news` SET `title` = COALESCE(:title, `title`) WHERE `id` = :id;', ['title' => $value]);
    // }
}