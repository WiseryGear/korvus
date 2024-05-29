<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once BASE_PATH . 'classes/FormHandler.php';
require_once BASE_PATH . 'classes/News.php';

use classes\FormHandler;
use classes\News;

function isEmpty($value)
{
    return empty($value) && $value != 0;
}

// Путь для Linux (примерный)
// $uploaddir = '/var/www/html/korvus/img/news';
$dirname = 'C:/ospanel/domains/korvus/img/news';

switch ($_POST['formName']) {
    case 'signin':
        $result = FormHandler::signin($_POST['login'], $_POST['password']);
        $path = ($result) ? '/php/editorPanel.php' : '/php/editorLogin.php?error=true';
        header('Location: http://' . $_SERVER['HTTP_HOST'] . $path);
        break;
    case 'signout':
        FormHandler::signout();
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/index.php');
        break;

    case 'insertNews':
        $file = $_FILES['photo'];
        // Получаем tmp_name для того, чтобы лишний раз не генерировать рандомное название файла
        $file_name = pathinfo($file['tmp_name'])['filename'] . '.' . pathinfo($file['name'])['extension'];

        if (move_uploaded_file($file['tmp_name'], $dirname . '/' . $file_name)) {
            News::insert($_POST['title'], $_POST['description'], $file_name);
        }

        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/php/editorPanel.php');
        break;
    case 'updateNews':
        $file = $_FILES['photo'];
        $file_name = null;
        
        if ($file['error'] === 0) {
            // Получаем tmp_name для того, чтобы лишний раз не генерировать рандомное название файла
            $file_name = pathinfo($file['tmp_name'])['filename'] . '.' . pathinfo($file['name'])['extension'];
            move_uploaded_file($file['tmp_name'], $dirname . '/' . $file_name);
        }
    
        $title       = isEmpty($_POST['title'])       ? null : $_POST['title'];
        $description = isEmpty($_POST['description']) ? null : $_POST['description'];
        
        $news = News::findOne($_POST['id']);
        
        $old_file_name = $news->getPhoto();
        unlink($dirname . '/' . $old_file_name); 
        $news->update($title, $description, $file_name);
        
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/php/editorPanel.php');
        break;
    case 'deleteNews':
        $news = News::findOne($_POST['id']);
        $file_name = $news->getPhoto();

        unlink($dirname . '/' . $file_name);

        News::findOne($_POST['id'])->delete();
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/php/editorPanel.php');
        break;
}
