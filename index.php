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

<header>
    <div class="header">
        <div class="logo">Петиков <span class="mint">и</span>  К°</div>
        <div class="contact">
            <button class="btn"  onclick="s1()">Заказать звонок</button>
            <div class="info">
                <div class="telefon">
                    <a href="tel:<?php echo variables::$telefon ?>"><?php echo formatTelefonNumber(variables::$telefon); ?></a>
                </div>
                <div class="workdays"><?php echo variables::$day_np;?> - <?php echo variables::$day_kp;?></div>
                <span class="worktime">с <?php echo variables::$open_time; ?> до <?php echo variables::$close_time; ?></span>
            </div>
        </div>
    </div>
</header>
<navigation>
    <!--     <div id="menuToggle">-->
    <!--         <input type="checkbox" />-->
    <!--         <span id="span1"></span>-->
    <!--         <span id="span2"></span>-->
    <!--         <span id="span3"></span>-->
    <!--     </div>-->
    <div class="nav-menu">
        <ul class="menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">Услуги</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </div>
</navigation>


<div class="overlay" id="overlay">
    <div class="content-wrapper">

        <button class="close-btn"  onclick="s2()"></button>
        <h1 class="title">Заказ звонка</h1>
        <form method="post" action="index.php" class="form-wrapper" onsubmit="return empty_form()" autocomplete="off">
            <label for="name" class="form-label">Ваше имя</label>
            <div class="error1" id="error1">Вы не ввели имя</div>
<!--            --><?php
//                if(isset($_POST['name']) && trim($_POST['name'])=='') {
//                    echo '<div class="error">Вы не ввели имя</div>';
//                }
//            ?>

            <input name="name" id="name" type="text" class="form-input" placeholder="Введите имя">
            <label for="telefon" class="form-label">Ваш телефон</label>
<!--            <div class="error">Вы не ввели номер телефона</div>-->
            <input name="telefon" id="telefon" type="text" class="form-input" placeholder="Введите телефон">
<!--            <input class="form-submit" type="submit" value="Отправить">-->
<!--            <input class="form-submit" type="submit" value="Отправить">-->
            <button class="form-submit" id="submit" type="submit" >Отправить</button>
        </form>
    </div>
</div>

<?php printss($_POST); ?>

<script src="js/clickButtonA.js"></script>
</body>
</html>
