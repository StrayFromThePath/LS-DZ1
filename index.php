<!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

            <title>Обо мне</title>

            <meta name="viewport" content="width=device-width, initial-scale=1">

                <link rel="stylesheet" href="dest/css/main.min.css">

                <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
                <link rel="icon" href="favicon.ico" type="image/x-icon" />

                    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
                </head>
                <body>

                    <div class = "wrapper">
                        <div class = "maincontent">

                            <!-------Header------->
                                <?php
                                    include("tmpl/header.php");
                                ?>
                            <!---------------->

                                <div class="main">
                                    <div class="container">

                                        <!-------Menu------->

                                            <?php
                                                include("tmpl/menu.php");
                                            ?>

                                            <!-------Основная информация------->

                                                <div class="info">
                                                    <div class="info__about">
                                                        <div class="info__about-title">
                                                            <h3>Основная информация</h3>
                                                        </div>
                                                        <div class="info__primary-avatar" href="#">
                                                            <img src="/img/arch.jpg" alt="user"/>
                                                        </div>
                                                        <ul class="info__primary-about">
                                                            <li class="info__primary-row info__primary-name">
                                                                <span>Меня зовут:</span> Толкунов Александр Сергеевич
                                                            </li>
                                                            <li class="info__primary-row info__primary-age">
                                                                <span>Мой возраст:</span> 20 лет
                                                            </li>
                                                            <li class="info__primary-row info__primary-city">
                                                                <span>Мой город:</span> Ростов-на-Дону, Россия
                                                            </li>
                                                            <li class="info__primary-row info__primary-profession">
                                                                <span>Моя специализация:</span> FRONTEND разработчик
                                                            </li>
                                                            <li class="info__primary-row info__primary-skills">
                                                                <span>Ключевые навыки:</span>
                                                                <ul class="tag__list">
                                                                    <li class="tag__item">
                                                                        <div class="tag__link">html</div>
                                                                    </li>
                                                                    <li class="tag__item">
                                                                        <div class="tag__link">css</div>
                                                                    </li>
                                                                    <li class="tag__item">
                                                                        <div class="tag__link">javascript</div>
                                                                    </li>
                                                                    <li class="tag__item">
                                                                        <div class="tag__link">gulp</div>
                                                                    </li>
                                                                    <li class="tag__item">
                                                                        <div class="tag__link">git</div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="info__about">
                                                        <div class="info__about-title">
                                                            <h3>Опыт работы</h3>
                                                        </div>
                                                        <ul class="about__list">
                                                            <li class="about__item">
                                                                <p>"ИП Боровицкий" - Продавец дисков</p>
                                                                <span class="about__item-period">Сентябрь 2005 - Август 2008</span>
                                                            </li>
                                                            <li class="about__item">
                                                                <p>"ООО Системы безопастности" - Системный администратор</p>
                                                                <span class="about__item-period">Июнь 2008 - Июль 2010</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="info__about">
                                                        <div class="info__about-title">
                                                            <h3>Образование</h3>
                                                        </div>
                                                        <ul class="about__list">
                                                            <li class="about__item  about__item-vyz">
                                                                <p>Незаконченное высшее. ДГТУ</p>
                                                                <span class="about__item-period">Октябрь 2012 - по настоящее время</span>
                                                            </li>
                                                            <li class="about__item about__item-kurs">
                                                                <p>Курсы Loftschool.ru</p>
                                                                <span class="about__item-period">Август 2014 - по настоящее время</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="empty"></div>
                                    </div>
                                </div>

                                <!----Footer----->

                                <?php
                                    include("tmpl/footer.php");
                                ?>

                                <!---------------->

                                <script src="js/vendor/jquery-1.11.0.min.js"></script>
                                <script src="js/jquery.dotdotdot.min.js"></script>
                                <script src="js/placeholders.min.js"></script>
                                <script src="js/main.js"></script>

                            </body>
                        </html>