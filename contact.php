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

                                            <!-------Обратная связь------->

                                                <div class="contact">
                                                    <div class="contact__title">
                                                    У вас интересный проект? Напишите мне
                                                    </div>
                                                    <div class="contact__wrap">
                                                        <div class="form__wrap">
                                                            <form action="validator.php" method="post">
                                                                <div class="form__inputs-row">
                                                                    <div class="form__input-row">
                                                                        <label for="name">Имя</label><br/>
                                                                        <input class="form__input form__input-name" id="name" name="name" type="text" placeholder="Как к Вам обращаться" autofocus="" required/>
                                                                    </div>
                                                                    <div class="form__input-row">
                                                                        <label for="email">Email</label><br/>
                                                                        <input class="form__input" id="email" name="email" type="email" placeholder="Куда мне писать" required/>
                                                                    </div>
                                                                </div>
                                                                <label for="message">Сообщение</label><br/>
                                                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Кратко в чем суть" required></textarea>
                                                                <div class="form__inputs-row form__captcha-row">
                                                                    <label for="captcha">Введите код, указанный на картинке</label>
                                                                    <img  class="form__captcha-pic" src="captcha.php" alt="captcha" width="100" height="50"/>
                                                                    <input class="form__input form__input-captcha" id="capcha" name="capcha" type="text" placeholder="Введите код" required/>
                                                                </div>
                                                                <div class="form__inputs-row">
                                                                    <input class="form__input-submit" type="submit" name="send" value="Отправить"/>
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

                                <!-------Footer------>
                                <?php
                                    include("tmpl/footer.php");
                                ?>
                                <!------------------->

                                <script src="js/vendor/jquery-1.11.0.min.js"></script>
                                <script src="js/jquery.dotdotdot.min.js"></script>
                                <script src="js/placeholders.min.js"></script>
                                <script src="js/main.js"></script>

                            </body>
                        </html>