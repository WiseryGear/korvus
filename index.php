<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once BASE_PATH . 'classes/News.php';

use classes\News;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/favicon.ico" type="">
        <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/customSwiper.css">
        <title>Типография Корвус</title>
    </head>
    <body>
        <header>
            <nav id="menu">
                <div id="menu_icon_box">
                    <a href="#sec_lead">
                        <img src="/img/logo.png" alt="..." class="h-100 p-2">
                    </a>
                    <a id="menu_icon" class="d-none d-sm-block">
                        <i class="menu_icon_top"></i>
                        <i class="menu_icon_middle"></i>
                        <i class="menu_icon_bottom"></i>
                    </a>
                </div>
                <div id="menu_box" class="d-flex justify-content-sm-around">
                    <a href="#sec_info" class="textTiny">
                        Визитка
                    </a>
                    <a href="#sec_service" class="textTiny">
                        Услуги
                    </a>
                    <a href="#sec_example" class="textTiny">
                        Примеры
                    </a>
                    <a href="#sec_news" class="textTiny">
                        Новости
                    </a>
                    <a href="#sec_history" class="textTiny">
                        История
                    </a>
                </div>
            </nav>
        </header>

        <!-- Лид -->

        <section id="sec_lead" class="sectColorSecondary1">
            <div class="container-fluid container-fluid-max">
                <div class="d-flex justify-content-center col-12 caseLead bgLead">
                    <div class="d-flex flex-column align-self-center col-10 col-md-8 col-xxl-6 p-md-5 element-animation amimation-top">
                        <div class="textBigOrange">
                            Типография &#171;Корвус&#187;
                        </div>
                        <div class="textSmall mb-2">
                            Мы проектируем, создаем, печатаем: полный цикл производства в одном месте.
                        </div>
                        <div class="mt-1">
                            <button type="button" class="btn btn-lg btn-outline-primary textSmall" data-bs-toggle="modal" data-bs-target="#Cooperation">Начать сотрудничество</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Модальное окно -->
        <div class="modal fade" id="Cooperation" tabindex="-1" aria-labelledby="CooperationLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <form action="/handlers/formCooperationUp.php" method="POST" class="modal-content sectColorMain element-animation amimation-bottom">
                    <div class="modal-header d-flex flex-column">
                        <span class="modal-title textAverageOrangeModal text-center" id="CooperationLabel">НАЧАТЬ СОТРУДНИЧЕСТВО</span>
                        <span class="modal-title textSmallModal text-center" id="CooperationLabel">Оставьте ваши данные и мы обязательно свяжемся с вами!</span>
                    </div>

                    <div class="modal-body d-flex flex-column">
                        <div class="input-group input-group-lg">
                            <input type="text" name="emailCooperation" class="form-control mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Почта" required>
                        </div>
                        <div class="input-group input-group-lg">
                            <input type="text" name="fullNameCooperation" class="form-control mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="ФИО" required>
                        </div>
                        <div class="input-group input-group-lg">
                            <input type="text" name="phoneCooperation" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Телефон" required>
                        </div>
                    </div>

                    <div class="modal-footer d-flex justify-content-between">
                        <button type="submit" name="Cooperation" value="CooperationUp" class="btn btn-lg btn-outline-primary textSmall">ОТПРАВИТЬ</button>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Визитка -->

        <section id="sec_info" class="sectColorSecondary2">
            <div class="container-fluid container-fluid-max">
                <div class="d-flex flex-wrap">
                    <div class="d-flex flex-column align-self-center col-12 col-xxl-6 p-md-5">
                        <div class="textLargeOrange element-animation amimation-bottom">
                            Надежный партнёр
                        </div>
                        <div class="textSmall element-animation amimation-bottom">
                            Профессиональная типография Корвус - ваш надёжный партнёр в печати! Мы предлагаем полный спектр услуг по офсетной печати c ВД-лаком. Специализируется типография на изготовлении упаковачной продукции, различных коробок и аннотаций.
                        </div>
                        <div class="textLargeOrange element-animation amimation-bottom">
                            Индивидуальный подход
                        </div>
                        <div class="textSmall element-animation amimation-bottom">
                             Компания гарантирует высокое качество, быстрые сроки выполнения заказов и индивидуальный подход к каждому клиенту. Мы предоставим бесплатную консультацию с технологом, дизайнеры помогут разработать макет вашей упаковки, а так же вас будет курировать личный менеджер компании Корвус.
                        </div>
                        <div class="textLargeOrange element-animation amimation-bottom">
                            Мы не стоим на месте
                        </div>
                        <div class="textSmall element-animation amimation-bottom">
                            Типография Корвус продолжает совершенствоваться и развиваться, обновив все оборудование к 2023 году. Теперь наша компания работает на самом передовом оборудовании, гарантируя клиентам высочайшее качество выполнения заказов и современный подход к производству полиграфической продукции.
                        </div>
                        <div class="textLargeOrange element-animation amimation-bottom">
                            Лидеры рынка
                        </div>
                        <div class="textSmall element-animation amimation-bottom">
                            Типография Корвус - лидер рынка в сфере полиграфических услуг. Накопленный опыт, команда профессионалов и новейшее оборудование – гарантия нашего благотворного сотрудничества. Мы успешно работаем с 2004 года, предоставляя клиентам качественные услуги и индивидуальный подход к каждому заказу.
                        </div>
                    </div>
                    <div class="d-flex justify-content-end justify-content-xxl-start col-12 col-xxl-6 bgDevelopment">
                        <div class="d-flex align-self-end col-5 bgDevelopmentText p-3">
                            <span class="textTiny element-animation amimation-left">Создано более миллиарда упаковачной продукции с 2004 года</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Услуги -->

        <section id="sec_service" class="sectColorSecondary1">
            <div class="container-fluid container-fluid-max bgPossibilities p-md-5">
                <div class="d-flex flex-column align-self-center textBigOrange element-animation amimation-right">
                    Наши услуги
                </div>
                <div class="d-flex flex-wrap">
                    <div class="d-flex flex-column align-self-center col-12 col-xxl-5 p-md-5 element-animation amimation-left">
                        <div class="textLargeOrange">
                            Печать и постпечать
                        </div>
                        <div class="textSmall">
                            Основным методом печати типографии Корвус является офсетная печать с ВД-лаком, которая обеспечивает высокое качество на различных типах бумаги и картона. После завершения процесса печати в типографии Корвус начинается этап постпечати. На этом этапе происходит обработка и доработка готовых печатных материалов для получения идеального конечного продукта:
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-self-center col-12 col-xxl-7 p-md-5 element-animation amimation-bottom">
                        <div class="d-flex flex-column p-2">
                            <a class="textSmall m-2" target="_blank" href="https://ru.wikipedia.org/wiki/%D0%93%D0%BE%D1%80%D1%8F%D1%87%D0%B5%D0%B5_%D1%82%D0%B8%D1%81%D0%BD%D0%B5%D0%BD%D0%B8%D0%B5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                Горячее тиснение
                            </a>
                            <a class="textSmall m-2" target="_blank" href="https://ru.wikipedia.org/wiki/%D0%A3%D0%BB%D1%8C%D1%82%D1%80%D0%B0%D1%84%D0%B8%D0%BE%D0%BB%D0%B5%D1%82%D0%BE%D0%B2%D0%B0%D1%8F_%D0%BF%D0%B5%D1%87%D0%B0%D1%82%D1%8C">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                УФ-лак
                            </a>           
                            <a class="textSmall m-2" target="_blank" href="https://ru.wikipedia.org/wiki/%D0%92%D1%8B%D1%80%D1%83%D0%B1%D0%BA%D0%B0_(%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D1%8F)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                Вырубка
                            </a>
                        </div>
                        <div class="d-flex flex-column p-2">
                            <a class="textSmall m-2" target="_blank" href="https://ru.wikipedia.org/wiki/%D0%9F%D0%BE%D0%BB%D0%B8%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%B4%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD#:~:text=%D0%B2%D1%80%D0%B5%D0%BC%D1%8F%20%D0%B8%D0%B7%D0%B3%D0%BE%D1%82%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F%20%D0%BA%D0%BD%D0%B8%D0%B3.-,%D0%9A%D0%BE%D0%BD%D0%B3%D1%80%D0%B5%D0%B2,%2D%D0%BC%D0%B0%D1%82%D1%80%D0%B8%D1%86%D1%8B%2C%20%D0%BF%D1%83%D1%82%D1%91%D0%BC%20%D0%B2%D1%8B%D0%B4%D0%B0%D0%B2%D0%BB%D0%B8%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F%20%D0%B8%D0%B7%D0%BE%D0%B1%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F.">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                Конгрев
                            </a>
                            <a class="textSmall m-2" target="_blank" href="https://ru.wikipedia.org/wiki/%D0%9B%D0%B0%D0%BC%D0%B8%D0%BD%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5_%D0%BF%D0%BE%D0%BB%D0%B8%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B9_%D0%BF%D1%80%D0%BE%D0%B4%D1%83%D0%BA%D1%86%D0%B8%D0%B8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                Ламинация
                            </a>
                            <a class="textSmall m-2" target="_blank" href="https://ru.wikipedia.org/wiki/%D0%A4%D0%B0%D0%BB%D1%8C%D1%86%D0%BE%D0%B2%D0%BA%D0%B0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                Фальцевальная склеивающая линия
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center col-12 col-xxl-5 p-2 element-animation amimation-right">
                        <div class="col-8 col-xxl-12">
                            <img src="/img/logop.png" alt="..." class="w-100">
                        </div>
                    </div>
                    <div class="d-flex flex-column align-self-center col-12 col-xxl-7 p-md-5">
                        <div class="textLargeOrange element-animation amimation-left">
                            Изготовление аннотаций
                        </div>
                        <div class="textSmall element-animation amimation-left">
                            Изготовление аннотаций в типографии Корвус производится с учетом высоких стандартов качества и внимания к деталям, чтобы обеспечить клиентам идеально выполненный и оформленный продукт. Это процесс, включающий несколько этапов: 
                        </div>
                        <div class="d-flex flex-wrap justify-content-center col-12 p-md-2 element-animation amimation-bottom">
                            <a class="textSmall m-3" target="_blank" href="https://ru.wikipedia.org/wiki/%D0%9F%D0%B5%D1%87%D0%B0%D1%82%D1%8C">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                Печать
                            </a>
                            <a class="textSmall m-3" target="_blank" href="https://ru.wikipedia.org/wiki/%D0%92%D1%8B%D1%80%D1%83%D0%B1%D0%BA%D0%B0_(%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D1%8F)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                Резка
                            </a>
                            <a class="textSmall m-3" target="_blank" href="https://ru.wikipedia.org/wiki/%D0%A4%D0%B0%D0%BB%D1%8C%D1%86%D0%BE%D0%B2%D0%BA%D0%B0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                Фальцовка
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center text-center col-12 p-md-3 element-animation amimation-bottom">
                        <span class="textTiny">Мы также предлагаем гибкие цены и быструю доставку, чтобы удовлетворить все ваши потребности. Не теряйте время и деньги на поиски, доверьтесь нам и получите качественную печатную продукцию с минимальными усилиями. Свяжитесь с нами сегодня и дайте нам возможность удивить вас!</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Примеры -->

        <section id="sec_example" class="sectColorSecondary2">
            <div class="container-fluid container-fluid-max p-md-5">
                <div class="textBigOrange pb-md-2 element-animation amimation-right">
                    Примеры
                </div>
                <div class="d-flex flex-wrap sectColorMain">
                    <div class="d-flex flex-column flex-wrap col-12 col-xxl-6">
                        <div class="d-flex flex-wrap">
                            <div class="col-6">
                                <div class="scale">
                                    <img src="/img/examples/example_1.jpg" alt="..." class="w-100 exampleImg">
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center col-6">
                                <div class="d-flex flex-column p-md-5 element-animation amimation-left">
                                    <span class="textAverageOrange">
                                        Горячее тиснение
                                    </span>
                                    <span class="textSmall">
                                        Техника нанесения узора или текстуры фольги различных цветов.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="d-flex flex-column justify-content-center col-6">
                                <div class="d-flex flex-column p-md-5 element-animation amimation-right">
                                    <span class="textAverageOrange">
                                        Ламинция
                                    </span>
                                    <span class="textSmall">
                                        Метод нанесения защитной, водонепроницаемой пленки.
                                    </span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="scale">
                                    <img src="/img/examples/example_2.jpg" alt="..." class="w-100 exampleImg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-wrap col-12 col-xxl-6">
                        <div class="d-flex flex-wrap">
                            <div class="col-6">
                                <div class="scale">
                                    <img src="/img/examples/example_3.jpg" alt="..." class="w-100 exampleImg">
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center col-6">
                                <div class="d-flex flex-column p-md-5 element-animation amimation-left">
                                    <span class="textAverageOrange">
                                        Конгрев
                                    </span>
                                    <span class="textSmall">
                                        Способ нанесения изображения в виде выпуклых участков на поверхности.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="d-flex flex-column justify-content-center col-6">
                                <div class="d-flex flex-column p-md-5 element-animation amimation-right">
                                    <span class="textAverageOrange">
                                        УФ-лак
                                    </span>
                                    <span class="textSmall">
                                        Специальное декоративное покрытие обеспечивающие защиту и блеск поверхности. 
                                    </span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="scale">
                                    <img src="/img/examples/example_4.jpg" alt="..." class="w-100 exampleImg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Новости -->

        <section id="sec_news" class="sectColorSecondary1">
            <div class="container">
                <div class="swiper py-5 p-md-5">
                    <div class="swiper-wrapper">
                        <?php foreach (News::findAll() as $news): ?>
                            <div data-hash="news<?= $news->getId()?>" class="swiper-slide">
                                <div class="d-flex flex-wrap caseContentNews">
                                    <div class="d-flex col-12 col-lg-6 col-xl-4">
                                        <img src="/img/news/<?= $news->getPhoto()?>" alt="..." class="object-fit-cover h-100 w-100">
                                    </div>
                                    <div class="d-flex flex-wrap col-12 col-lg-6 col-xl-8">
                                        <span class="mx-3 textAverageOrange"><?= $news->getTitle()?></span>
                                        <span class="mx-3 textSmall"><?= $news->getDescription()?></span>
                                        <div class="d-flex justify-content-end col-12">
                                            <div class="d-flex align-self-end me-3">
                                                <span class="textTiny"><?= $news->getCreatedAt()?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Буллеты/Прогрессбар -->
                    <div class="swiper-pagination"></div>

                    <!-- Стрелки -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- Скролл -->
                    <div class="swiper-scrollbar"></div>
                    
                </div>
            </div>
        </section>

        <!-- История -->

        <section id="sec_history" class="sectColorSecondary2">
            <div class="container py-5">
                <div class="textLargeOrange text-center element-animation amimation-top">
                    Наша история
                </div>
                <div class="d-flex flex-wrap">
                    <div class="d-flex flex-column flex-wrap align-self-center col-12 col-lg-4 col-xxl-3">
                        <div class="d-flex flex-column align-self-center col-8 col-lg-12 element-animation amimation-left">
                            <img src="/img/AlexEL.png" alt="..." class="w-100">
                            <span class="textTiny">
                                Александр Людвинский, директор, типографии &#171;Корвус&#187;
                            </span>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-wrap justify-content-center col-12 col-lg-8 col-xxl-9 px-lg-5">
                        <div class="d-flex flex-column flex-wrap">
                            <span class="textAverageOrange element-animation amimation-right">Как все начиналось</span>
                            <span class="textTiny mb-2 element-animation amimation-left">Сама типография «Корвус» выросла в свое время из рекламного агентства «Людвинский и Ко», которое было создано владельцем бизнеса — Александром Людвинским в 2001 г.: «Еще обучаясь в институте, я устроился на подработку в издательство, выпускающее журналы. Освоил верстку, дизайн, препресс и это меня это затянуло. В итоге через некоторое время я оказался в издательско-полиграфическом бизнесе, создав свое рекламное агенство».</span>
                            <span class="textTiny element-animation amimation-left">Изначально компания занималась изданием телефонных справочников и других видов справочных изданий. Вскоре агентство превратилось в небольшую-рекламнопроизводственную компанию, в которой появилась и первая техника — ризограф и устройства лазерной печати. Небольшие заказы она могла изготавливать самостоятельно, остальные же заказы переразмещали в других полиграфических компаниях.</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-wrap col-12 py-4">
                        <span class="textAverageOrange element-animation amimation-right">Трансформация</span>
                        <span class="textTiny element-animation amimation-left">Буквально через три года рекламное агентство трансформировалось в типографию полного цикла «Корвус»... <a class="textSmallOrange" target="_blank" href="/pdf/history.pdf">Продолжение...</a></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Футер -->

        <footer>
            <div class="container-fluid">
                <div class="d-flex flex-wrap p-5 element-animation amimation-top">
                    <div class="d-flex justify-content-center col-12 col-xl-4 pb-2">
                        <a href="#sec_lead" class="col-8 col-xl-12">
                            <img src="/img/logo.png" alt="..." class="w-100">
                        </a>
                    </div>
                    <div class="d-flex justify-content-center align-self-center col-6 col-xl-4">
                        <div class="d-flex flex-column">
                            <div class="textSmall">Наш адрес:</div>
                            <div class="textTiny">Барнаул, Ползунова, 55А</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-self-center col-6 col-xl-4">
                        <div class="d-flex flex-column">
                            <div class="textSmall">Звоните по номеру:</div>
                            <div class="textTiny">+7(960)950-07-54</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="js/swiper-bundle.min.js"></script>
        <script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="js/customSwiper.js"></script>
        <script src="js/header.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
