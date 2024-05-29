<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once BASE_PATH . 'classes/News.php';

use classes\News;

if (!isset($_SESSION['user']['id'])){
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/img/favicon.ico" type="">
        <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/customSwiper.css">
        <title>Типография Корвус</title>
    </head>
    <body class="sectColorSecondary2">
        <section id="sec_lead" class="sectColorSecondary2">
            <div class="container-fluid container-fluid-max">
                <div class="d-flex justify-content-center col-12">
                    <div class="d-flex flex-column align-self-center col-12 p-xl-5">

                        <?php if (array_key_exists('user', $_SESSION)) { ?>
                            <form action="/handlers/formHandler.php" method="POST">
                                <button class="btn btn-lg btn-outline-primary mb-2 textSmall" type="submit" name="formName" value="signout">
                                    Выход
                                </button>
                            </form>
                        <?php } ?>
                        
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Изображение</th>
                                    <th scope="col">Заголовок</th>
                                    <th scope="col">Описание</th>
                                    <th scope="col" colspan="2" class="text-center">Управление</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <form action="/handlers/formHandler.php" method="POST" enctype="multipart/form-data">
                                        <th scope="row">id</th>
                                        <td><input type="file" name="photo" class="form-control"></td>
                                        <td><input type="text" name="title" class="form-control"></td>
                                        <td><input type="text" name="description" class="form-control"></td>
                                        <td colspan="2" class="text-center"><button class="btn btn-outline-primary" type="submit" name="formName" value="insertNews">Добавить</button></td>
                                    </form>
                                </tr>
                                <?php 
                                    $news = News::findAll(); 
                                    foreach ($news as $value) {
                                        $id          = $value->getId();
                                        $title       = $value->getTitle();
                                        $description = $value->getDescription();
                                        $photo       = $value->getPhoto();
                                ?>
                                    <tr>
                                        <form action="/handlers/formHandler.php" method="POST" enctype="multipart/form-data">
                                            <th scope="row"><?= $id ?></th>
                                            <td><input type="file" name="photo" class="form-control"> <?= $photo ?> </td>
                                            <td><input type="text" name="title" value="<?= $title ?>" class="form-control"></td>
                                            <td><input type="text" name="description" value="<?= $description ?>" class="form-control"></td>
                                            <input type="hidden" name="id" value="<?= $id ?>" name="id">
                                            <td class="text-center"><button class="btn btn-outline-primary" type="submit" name="formName" value="updateNews">Редактировать</button></td>
                                            <td class="text-center"><button class="btn btn-outline-primary" type="submit" name="formName" value="deleteNews">Удалить</button></td>
                                        </form>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <script src="/js/swiper-bundle.min.js"></script>
        <script src="/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="/js/customSwiper.js"></script>
        <script src="/js/header.js"></script>
        <script src="/js/script.js"></script>
    </body>
</html>
