<?php
use ru\www_020920\Variables;

// функция форматирования телефонного номера

function formatTelefonNumber($telefon) {
    $pref = '';
    $temp = $telefon;
    if ($temp[0]=='8') { $pref=substr($temp,0,1);}
    elseif($temp[0]=='+') {$pref=substr($temp,0,2);}

    $temp = substr($temp, -10);
    $temp=$pref.'&nbsp('.substr($temp, 0,3).')&nbsp'.
         substr($temp, 3,3).
        '&nbsp'.substr($temp, 6,2).
        '&nbsp'.substr($temp, 8,2);
    $telefon = $temp;
    return $telefon;
}

function formatTelefonNumber_2($telefon) {
    $pref = '';
    $temp = $telefon;
    if ($temp[0]=='8') { $pref=substr($temp,0,1);}
    elseif($temp[0]=='+') {$pref=substr($temp,0,2);}

    $temp = substr($temp, -10);
    $temp=$pref.' ('.substr($temp, 0,3).') '.
        substr($temp, 3,3).
        ' '.substr($temp, 6,2).
        ' '.substr($temp, 8,2);
    $telefon = $temp;
    return $telefon;
}

function sendEmail() {
    $message = "Поступила заявка на звонок: \n\n".
               "Отправитель:  ".$_POST['name']."\n".
               "Телефон:      ".formatTelefonNumber_2($_POST['telefon']);
    $headers = "From: first.kroxplus.ru <admin@first.kroxplus.ru>\r\nContent-type: text/plain; charset=UTF-8\r\n";
    $return_path = '-f admin@first.kroxplus.ru';

    if (!empty($_POST) && trim($_POST['name']!='' && trim($_POST['telefon']!=''))) {
       if( mail(variables::$email_info['slave'],"Заказ звонка", $message, $headers, $return_path)){echo "сообщение успешно отправлено";
           $_SESSION['mail'] = "сообщение успешно отправлено";}
       else {
           echo "при отправке сообщения возникли ошибки";
           $_SESSION['mail'] = "при отправке сообщения возникли ошибки";
       }
    }
}






function printss($source) {
    echo "<pre style='font-size: 20px; 
                      color: #f52e14;
                      font-weight: 500'>";
    print_r($source);
    echo "</pre>";
}


