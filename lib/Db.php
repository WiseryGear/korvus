<?php

namespace lib; // Имя функиционала ниже

use PDO; // Подключение ПДО

class Db // Объявление класса
{
    public $db; // Соединение с бд

    public function __construct() { // Инициализация объекта
        $config = require_once("../config/db.php"); // Запись конфига в переменную
        $this->db = new PDO($config['dsn'], $config['username'], $config['password']); // Соединение с бд
    }

    public function query($sql, $params = []) // Выполнение sql запроса (Можно парамсом) 
    {
        $stmt = $this->db->prepare($sql); // Подготовка sql запроса

        if (!empty($params)) { //  Если параметры не пусты: выполнение
            foreach ($params as $key => $value) { // Перебераем парамс на ключ и значение
                $stmt->bindValue(':' . $key, $value); // Добавляем ключу ":" и запоминаем данные
            }
        }

        $stmt->execute(); // Выполнение sql запроса

        return $stmt; // Возвращает результат выполнения sql запроса
    }

    public function row($sql, $params = []) // Выполнение sql запроса c параметрами
    {
        $result = $this->query($sql, $params); // Выполнение 16 строки
        return $result->fetchAll(PDO::FETCH_ASSOC); // Фильтрация данных Возвращение всего
    }

    public function column($sql, $params = []) // Выполнение sql запроса c параметрами
    {
        $result = $this->query($sql, $params); // Выполнение 16 строки
        return $result->fetchColumn(); // Фильтрация данных Возвращение столбца
    }
}