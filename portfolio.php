<!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

            <title>LoftSchool DZ1</title>

            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
            <link rel="icon" href="favicon.ico" type="image/x-icon" />

                <link rel="stylesheet" href="dest/css/main.min.css">

                    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
                </head>
                <body>

                    <div class = "wrapper">
                        <div class = "maincontent">

                            <!-------Popup добавления проекта------->

                                <div class="popup" id="add__project">
                                    <div class="popup__inner">
                                        <div class="popup__title">
                                        Добавление проекта
                                            <span class="popup__close"></span>
                                        </div>
                                        <form action="">
                                            <div class="popup__row">
                                                <label for="name-project">Название проекта</label><br/>
                                                <input id="name-project" class="popup__input" name="name-project" type="text" placeholder="Введите название" autofocus="" required/>
                                            </div>
                                            <div class="popup__row">
                                                <label for="pic-project">Картинка проекта</label><br/>
                                                <div class="file">
                                                    <input id="pic-project" name="pic-project" type="file" placeholder="Загрузите изображение" required/>
                                                    <div class="inputbox"><span></span></div>
                                                    <div class="btn"></div>
                                                </div>
                                            </div>
                                            <div class="popup__row">
                                                <label for="url-project">URL проекта</label><br/>
                                                <input id="url-project" class="popup__input" name="url-project" type="url" placeholder="Добавьте ссылку" required/>
                                            </div>
                                            <div class="popup__row">
                                                <label for="desc-project">Описание</label><br/>
                                                <textarea name="desc-project" id="desc-project" class="popup__textarea" cols="30" rows="10" placeholder="Пару слов о Вашем проекте" required></textarea>
                                            </div>
                                            <div class="popup__row-button">
                                                <input class="popup__submit" type="submit" value="Добавить"/>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            <!-------Header------->

                                <?php
                                    include("tmpl/header.php");
                                ?>
                                <!------------------>
                                <div class="main">
                                    <div class="container">

                                        <!-------Menu------->

                                            <?php
                                                include("tmpl/menu.php");
                                            ?>

                                            <!-------Портфолио------->

                                                <div class="portfolio">
                                                    <div class="portfolio__title">Мои работы</div>
                                                    <ul class="portfolio__list">
                                                        <li class="portfolio__item">
                                                            <a class="portfolio__pic" href="#">
                                                                <img src="/img/item.jpg" alt="portfolio-item"/>
                                                                <div class="portfolio__hover"></div>
                                                                <p class="portfolio__pic-title">Название</p>
                                                            </a>
                                                            <a class="portfolio__url" href="#">www.site.com</a>
                                                            <!-----Скрипт ограничения контента не сработает через проверку в инспекторе----->
                                                                <p class="portfolio__item-description">
                                                                Информация о проекте 1 превью 2 строки 2 строки 2 строки 2 строки
                                                                </p>
                                                            </li>
                                                            <li class="portfolio__item">
                                                                <a class="portfolio__pic" href="#">
                                                                    <img src="/img/item.jpg" alt="portfolio-item"/>
                                                                    <div class="portfolio__hover"></div>
                                                                    <p class="portfolio__pic-title">Название</p>
                                                                </a>
                                                                <a class="portfolio__url" href="#">www.site.com</a>
                                                                <!-----Скрипт ограничения контента не сработает через проверку в инспекторе----->
                                                                    <p class="portfolio__item-description">
                                                                    Информация о проекте 1 превью 2 строки 2 строки 2 строки 2 строки
                                                                    </p>
                                                                </li>
                                                                <li class="portfolio__item">
                                                                    <a class="portfolio__pic" href="#">
                                                                        <img src="/img/item.jpg" alt="portfolio-item"/>
                                                                        <div class="portfolio__hover"></div>
                                                                        <p class="portfolio__pic-title">Название</p>
                                                                    </a>
                                                                    <a class="portfolio__url" href="#">www.site.com</a>
                                                                    <!-----Скрипт ограничения контента не сработает через проверку в инспекторе----->
                                                                        <p class="portfolio__item-description">
                                                                        Информация о проекте 1 превью 2 строки 2 строки 2 строки 2 строки
                                                                        </p>
                                                                    </li>
                                                                    <li class="portfolio__item">
                                                                        <a class="portfolio__pic" href="#">
                                                                            <img src="/img/item.jpg" alt="portfolio-item"/>
                                                                            <div class="portfolio__hover"></div>
                                                                            <p class="portfolio__pic-title">Название</p>
                                                                        </a>
                                                                        <a class="portfolio__url" href="#">www.site.com</a>
                                                                        <!-----Скрипт ограничения контента не сработает через проверку в инспекторе----->
                                                                            <p class="portfolio__item-description">
                                                                            Информация о проекте 1 превью 2 строки 2 строки 2 строки 2 строки
                                                                            </p>
                                                                        </li>
                                                                        <li id="myModal" class="portfolio__item portfolio__add">
                                                                            <p>Добавить проект</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                            </div>
                                        </div>
                                        <div class="empty"></div>
                                    </div>
                                </div>

                                <!-----Footer--->
                                <?php
                                    include("tmpl/footer.php");
                                ?>
                                <!--------------->

                                <script src="js/vendor/jquery-1.11.0.min.js"></script>
                                <script src="js/jquery.dotdotdot.min.js"></script>
                                <script src="js/placeholders.min.js"></script>
                                <script src="js/main.js"></script>

                            </body>
                        </html>