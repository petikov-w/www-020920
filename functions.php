<?php

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