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

                <link rel="stylesheet" href="dest/css/main.min.css">

                    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
                </head>
                <body>

                    <div class = "wrapper">
                        <div class = "maincontent">

                            <!-------Header------->
                                <header class="header">
                                <?php
                                    include("/temlate/header.php");
                                ?>
                                </header>
                                <div class="main">
                                    <div class="container">

                                        <!-------Menu------->

                                            <div class="sidebar__left">
                                            <?php
                                                include("/temlate/menu.php");
                                            ?>
                                            </div>

                                            <!-------Портфолио------->

                                                <div class="portfolio">
                                                    <div class="portfolio__title">Мои работы</div>
                                                    <ul class="portfolio__list">
                                                        <li class="portfolio__item">
                                                            <a class="portfolio__pic" href="#">
                                                                <img src="/img/item.jpg" alt="portfolio-item"/>
                                                                <div class="portfolio__hover"></div>
                                                                <p>Название</p>
                                                            </a>
                                                            <a class="portfolio__url" href="#">www.site.com</a>
                                                            <div class="portfolio__item-description">
                                                                <p>Информация о проекте <br/> 1 превью 2 строки....</p>
                                                            </div>
                                                        </li>
                                                        <li class="portfolio__item">
                                                            <a class="portfolio__pic" href="#">
                                                                <img src="/img/item.jpg" alt="portfolio-item"/>
                                                                <div class="portfolio__hover"></div>
                                                                <p>Название</p>
                                                            </a>
                                                            <a class="portfolio__url" href="#">www.site.com</a>
                                                            <div class="portfolio__item-description">
                                                                <p>Информация о проекте <br/> 1 превью 2 строки....</p>
                                                            </div>
                                                        </li>
                                                        <li class="portfolio__item">
                                                            <a class="portfolio__pic" href="#">
                                                                <img src="/img/item.jpg" alt="portfolio-item"/>
                                                                <div class="portfolio__hover"></div>
                                                                <p>Название</p>
                                                            </a>
                                                            <a class="portfolio__url" href="#">www.site.com</a>
                                                            <div class="portfolio__item-description">
                                                                <p>Информация о проекте <br/> 1 превью 2 строки....</p>
                                                            </div>
                                                        </li>
                                                        <li class="portfolio__item">
                                                            <a class="portfolio__pic" href="#">
                                                                <img src="/img/item.jpg" alt="portfolio-item"/>
                                                                <div class="portfolio__hover"></div>
                                                                <p>Название</p>
                                                            </a>
                                                            <a class="portfolio__url" href="#">www.site.com</a>
                                                            <div class="portfolio__item-description">
                                                                <p>Информация о проекте <br/> 1 превью 2 строки....</p>
                                                            </div>
                                                        </li>
                                                        <li class="portfolio__item portfolio__add">
                                                            <p>Добавить проект</p>
                                                        </li>
                                                    </ul>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="empty"></div>
                                    </div>
                                </div>

                                <footer class="footer">
                                <?php
                                    include("/temlate/footer.php");
                                ?>
                                </footer>

                                <script src="js/vendor/jquery-1.11.0.min.js"></script>
                                <script src="js/jquery.dotdotdot.min.js"></script>
                                <script src="js/main.js"></script>

                            </body>
                        </html>