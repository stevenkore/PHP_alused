<?php
/**
 * Created by PhpStorm.
 * User: steven.kore
 * Date: 14.12.2018
 * Time: 12:33
 */

// tingimuslaused
/*
 *if(tingimus)
 *  tegevused, mis toimuvad siis, kus tingimus kehtib
 *{ else }
 *   muidu, kui tingimus ei kehti, toimuvad siin kijutatud tegevused
*/

echo '<h5>Ülesanne 1</h5>';
$arv = rand(0, 100);
if($arv % 2 == 0){
    echo '<div style="color: green">'.$arv.'</div>';
} else {
    echo '<div style="color: red">'.$arv.'</div>';
}
?>

<?php

echo '<h5>Ülesanne 2</h5>';
$arv1 = rand(0, 100);
if($arv1 >= 0 and $arv1 < 25){
    echo '<div style="color: green">'.$arv1.'</div>';
} else if($arv1 >= 25 and $arv1 < 50) {
    echo '<div style="color: red">'.$arv1.'</div>';
} else if($arv1 >= 50 and $arv1 < 75) {
    echo '<div style="color: blue">'.$arv1.'</div>';
} else if($arv1 >= 75 and $arv1 < 100) {
    echo '<div style="color: orange">'.$arv1.'</div>';
} else {
    echo '<div style="color: black">'.$arv1.'</div>';
}
?>

    <style>
        div{
            width: 100px;
            height: 100px;
            border-radius: 50px;
            border: solid 1px black;
        }
    </style>

<?php


echo '<h5>Ülesanne 3</h5>';
$aktiivne = 'punane';
switch ($aktiivne){
    case 'punane':
        echo '<div style="background: red"></div>';
        echo '<div></div>';
        echo '<div></div>';
        break;
    case 'kollane':
        echo '<div></div>';
        echo '<div style="background: orange"></div>';
        echo '<div></div>';
        break;
    case 'roheline':
        echo '<div></div>';
        echo '<div></div>';
        echo '<div style="background: green"></div>';
        break;
    default:
        echo '<div style="background: black"></div>';
        echo '<div style="background: black"></div>';
        echo '<div style="background: black"></div>';
        break;
}


?>