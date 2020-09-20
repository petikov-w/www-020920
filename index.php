<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

</head>
<body>
<?php
   use ru\www_020920\Variables;
   require_once 'variables.php';
   require_once 'functions.php';
?>
<!--================================= ШАПКА САЙТА =========================================-->
<header>
    <div class="header">
        <div class="logo">Петиков <span class="mint">и</span>  К°</div>
        <div class="contact">
            <button class="btn-call">Заказать звонок</button>
            <div class="info">
                <div class="telefon">
                    <a href="tel:<?php echo variables::$telefon_info['main'] ?>"><?php echo formatTelefonNumber(variables::$telefon_info['main']); ?></a>
                </div>
                <div class="workdays"><?php echo variables::$work_info['day_np'];?> - <?php echo variables::$work_info['day_kp'];?></div>
                <span class="worktime">с <?php echo variables::$work_info['open_time']; ?> до <?php echo variables::$work_info['close_time']; ?></span>
            </div>
        </div>
    </div>
</header>
<!--======================================================================================-->


<navigation>
    <!--     <div id="menuToggle">-->
    <!--         <input type="checkbox" />-->
    <!--         <span id="span1"></span>-->
    <!--         <span id="span2"></span>-->
    <!--         <span id="span3"></span>-->
    <!--     </div>-->
<!--================================ ГЛАВНОЕ МЕНЮ ========================================-->
    <div class="nav-menu">
        <ul class="menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">Услуги</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </div>
<!--======================================================================================-->
</navigation>

<div class="owl-carousel owl-theme main-slider">
    <div class="cont">
        <div class="box"><h3>Первый вариант дизайна </h3></div>
        <div class="item pics"><img src="images\img-1.jpg" height="700" alt=""></div>
    </div>
    <div class="cont">
        <div class="box"><h3>Второй вариант дизайна</h3></div>
        <div class="item pics"><img src="images\img-2.jpg" height="700" alt=""></div>
    </div>
    <div class="cont">
        <div class="box"><h3>Третий вариант дизайна</h3></div>
        <div class="item pics"><img src="images\img-3.jpg" height="700" alt=""></div>
    </div>
    <div class="cont">
        <div class="box"><h3>Четвертый вариант дизайна</h3></div>
        <div class="item pics"><img src="images\img-4.jpg" height="700" alt=""></div>
    </div>
    <div class="cont">
        <div class="box"><h3>Пятый вариант дизайна</h3></div>
        <div class="item pics"><img src="images\img-5.jpg" height="700" alt=""></div>
    </div>
</div>


<!--=========================== ФОРМА ОБРАТНОГО ЗВОНКА====================================-->
<div class="overlay" id="overlay">
    <div class="content-wrapper">
        <button class="btn-close"></button>
        <h1 class="title">Заказ звонка</h1>
        <form method="post" action="index.php" class="form-wrapper" autocomplete="off">
            <label for="name" class="form-label">Ваше имя</label>
            <div class="error err1">Вы не ввели имя</div>
            <input name="name" id="name" type="text" class="form-input" placeholder="Введите имя">
            <label for="telefon" class="form-label">Ваш телефон</label>
            <div class="error err2">Вы не ввели номер телефона</div>
            <input name="telefon" id="telefon" type="text" class="form-input" placeholder="Введите телефон">
            <button class="form-submit" type="submit" onsubmit="<?php sendEmail(); ?>">Отправить</button>
        </form>
    </div>
</div>
<!--=======================================================================================-->

<?php //printss($_POST);
//printss($_SESSION);?>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://kit.fontawesome.com/f9b4d1a641.js" crossorigin="anonymous"></script>
<!--<script src="https://use.fontawesome.com/0503defa67.js"></script>-->
<script src="js/callback_forms.js"></script>

</body>
</html>
