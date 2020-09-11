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
   $close_time='';
   $open_time='';
   $telefon='';
   $day_np = '';
   $day_kp = '';
   include('variables.php');
   include ('functions.php');
?>

<header>
    <div class="header">
        <div class="logo">Петиков <span class="mint">и</span>  К°</div>
        <div class="contact">
            <button class="btn">Заказать звонок</button>
            <div class="info">
                <div class="telefon">
                    <a href="tel:<?php echo $telefon ?>"><?php echo formatTelefonNumber($telefon); ?></a>
                </div>
                <div class="workdays"><?php echo $day_np;?> - <?php echo $day_kp;?></div>
                <span class="worktime">с <?php echo $open_time; ?> до <?php echo $close_time; ?></span>
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


</body>
</html>
