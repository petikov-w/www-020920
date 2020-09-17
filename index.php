<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
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

<!--=========================== ФОРМА ОБРАТНОГО ЗВОНКА====================================-->
<div class="overlay" id="overlay">
    <div class="content-wrapper">
        <button class="close-btn"  onclick="visible_form_3(false)"></button>
        <h1 class="title">Заказ звонка</h1>
        <form method="post" action="index.php" class="form-wrapper"
                            onsubmit="return empty_form()"
                            autocomplete="off">
            <label for="name" class="form-label">Ваше имя</label>
            <div class="error" id="error1">Вы не ввели имя</div>
            <input name="name" id="name" type="text" class="form-input"
                   onblur ="empty_field('name','error1')" placeholder="Введите имя">
            <label for="telefon" class="form-label">Ваш телефон</label>
            <div class="error" id="error2">Вы не ввели номер телефона</div>
            <input name="telefon" id="telefon" type="text" class="form-input"
                   onblur ="empty_field('telefon','error2')" placeholder="Введите телефон">
            <input class="form-submit" type="submit" onsubmit="<?php sendEmail(); ?>" value="Отправить">
        </form>
    </div>
</div>
<!--=======================================================================================-->

<?php //printss($_POST);
//printss($_SESSION);?>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/callback_form.js"></script>
<script src="js/callback_forms.js"></script>

</body>
</html>
