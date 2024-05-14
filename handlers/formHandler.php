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
        News::insert($_POST['title'], $_POST['description'], $_POST['photo']);
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/php/editorPanel.php');
        break;
    case 'updateNews':
        $title = isEmpty($_POST['title']) ? null : $_POST['title'];
        $description = isEmpty($_POST['description']) ? null : $_POST['description'];
        $photo = isEmpty($_POST['photo']) ? null : $_POST['photo'];
        
        News::findOne($_POST['id'])->update($title, $description, $photo);
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/php/editorPanel.php');
        break; 
    case 'deleteNews':
        News::findOne($_POST['id'])->delete();
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/php/editorPanel.php');
        break;
}
    // INSERT INTO images (name, path, description) VALUES ('myimage.jpg', '/path/to/myimage.jpg', 'This is a picture of my cat');