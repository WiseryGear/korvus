<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

if (isset($_SESSION['user']['id'])){
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
    <body>
        <section class="sectColorSecondary1">
            <div class="container-fluid container-fluid-max">
                <div class="d-flex justify-content-center col-12 caseLead bgLead">
                    <div class="d-flex flex-column align-self-center col-10 col-md-6 col-xxl-4 p-md-5 element-animation amimation-top">

                        <form action="/handlers/formHandler.php" method="POST">
                            <div class="d-flex flex-column gap-2">
                                <span class="textLargeOrange">
                                    Вход
                                </span>

                                <div class="form-floating">
                                    <input type="login" name="login" class="form-control" placeholder="" required>
                                    <label for="">Логин</label>
                                </div>

                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control" placeholder="" required>
                                    <label for="">Пароль</label>
                                </div>

                                <?php if (isset($_GET['error'])) { ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg>
                                        <strong>Ошибка!</strong>
                                        <span>Неверный логин или пароль!</span>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php } ?>
                                
                                <button type="submit" name="formName" value="signin" class="btn btn-lg btn-outline-primary textSmall">Войти</button>
                            </div>
                        </form>
                        
                        <span class="text-center textTiny mt-2">
                            Только для сотрудников компании
                        </span>
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
