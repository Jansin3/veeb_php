<?php
/**
 * Created by PhpStorm.
 * User: jan.sinilnikov
 * Date: 20.02.2019
 * Time: 12:08
 * defineerimine functioon */
/**function paarsuseKontroll($arv){
    if($arv % 2 == 0) {
        echo $arv.' on paaris<br>';
    } else {
        echo $arv.' on paaritu<br>';
    }
    return $kontroll;
}
for ($arv = 0; $arv <=10; $arv++) {
    $kontroll = paarsuseKontroll($arv);
    echo $kontroll;
}
*/
function kasPaaris($arv) {
    if($arv % 2 == 0 ) {
        $kontroll = true;
    } else {
        $kontroll = false;
    }
    return $kontroll;
}

function kirjeldus($paaris) {
    if ($paaris == true) {
        echo ' on paaris';
    } else {
        echo ' on paaritu';
    }
    echo ' <br>';
}
for($arv = 0; $arv <=10; $arv++) {
    echo $arv;
    $kontroll = kasPaaris($arv);
    kirjeldus($kontroll);
}