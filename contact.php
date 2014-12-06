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

                                            <!-------Обратная связь------->

                                                <div class="contact">
                                                    <div class="contact__title">
                                                    У вас интересный проект? Напишите мне
                                                    </div>
                                                    <div class="contact__wrap">
                                                        <div class="form__wrap">
                                                            <form action="" method="post">
                                                                <div class="form__inputs-row">
                                                                    <div class="form__input-row">
                                                                        <label for="name">Имя</label><br/>
                                                                        <input class="form__input form__input-name" id="name" name="name" type="text" placeholder="Как к Вам обращаться" autofocus=""/>
                                                                    </div>
                                                                    <div class="form__input-row">
                                                                        <label for="email">Email</label><br/>
                                                                        <input class="form__input" id="email" name="email" type="email" placeholder="Куда мне писать"/>
                                                                    </div>
                                                                </div>
                                                                <label for="message">Сообщение</label><br/>
                                                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Кратко в чем суть"></textarea>
                                                                <div class="form__inputs-row form__captcha-row">
                                                                    <label for="captcha">Введите код, указанный на картинке</label>
                                                                    <img class="form__captcha-pic" src="" alt=""/>
                                                                    <input class="form__input form__input-captcha" id="captcha" name="captcha" type="text" placeholder="Введите код"/>
                                                                </div>
                                                                <div class="form__inputs-row">
                                                                    <input class="form__input-submit" type="submit" value="Отправить"/>
                                                                    <input class="form__input-reset" type="reset" value="Очистить"/>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
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