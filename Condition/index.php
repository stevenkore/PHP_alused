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
$arv = rand(0, 100);
if($arv >= 0 and $arv < 25){
    echo '<div style="color: green">'.$arv.'</div>';
} else if($arv >= 25 and $arv < 50) {
    echo '<div style="color: red">'.$arv.'</div>';
} else if($arv >= 50 and $arv < 75) {
    echo '<div style="color: blue">'.$arv.'</div>';
} else if($arv >= 75 and $arv < 100) {
    echo '<div style="color: orange">'.$arv.'</div>';
}



?>
