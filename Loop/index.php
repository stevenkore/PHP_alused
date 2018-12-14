<?php
header('Refresh: 1');
/**
 * Created by PhpStorm.
 * User: steven.kore
 * Date: 14.12.2018
 * Time: 13:58
 */

// for
/*
 * for($jm = alg; $jm < lopp; $jm++){
 *      tegevused, mis toimunud nii kaua
 *      kui ja väärtus ei ole lõppväärtust
 *      saavutanud
 * }
 * */
echo '<h5>Ülesanne 1</h5>';
for($arv = 1; $arv <= 10; $arv++){
    /*if($arv % 2 == 0){
        $varv = 'green';
    } else {
        $varv = 'red';
    }*/
    $varv = ($arv % 2 == 0) ? 'green' : 'red';
    echo '<div style="color: '.$varv.'">'.$arv.'</div>';
}

?>
<style>
    table, tr, td{
        width: 200px;
        border: solid 1px black;
        border-collapse: collapse;
    }
    </style>
<?php

echo '<h5>Ülesanne 2</h5>';
echo '<table>';
for($reaNumber = 1; $reaNumber <= 5; $reaNumber++) {
    echo '<tr>';
    for ($veeruNumber = 1; $veeruNumber <= 5; $veeruNumber++) {
        $varv = '#';
        for ($kord = 1; $kord <= 6; $kord++) {
            $varv = $varv . dechex(rand(0, 15));
        }
        echo '<td style="background: ' . $varv . '">&nbsp;</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
<style>
    table,th,td,tr {
        width: 100px;
    }
    th{
        background-color: aquamarine;
    }
</style>


<?php

echo '<hr>';

echo '<h5>Ülesanne 3</h5>';

echo '<table>';

for($arv2 = 0; $arv2 <= 10; $arv2++){
    /* if($arv2 == 0){
         $txt = '&nbsp;';
     } else {
         $txt = $arv2;
     }*/
    $txt = ($arv2 == 0) ? '&nbsp;' : $arv2;
    echo '<th>';
    echo $txt;
    echo '</th>';
}
// põhitabel
for($arv1 = 1; $arv1 <= 10; $arv1++){
    echo '<tr>';

    echo '<th style="background-color: deepskyblue">';
    echo $arv1;
    echo '</th>';

    for($arv2 = 1; $arv2 <= 10; $arv2++) {
        echo '<td>';
        echo $arv1 * $arv2;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';


?>
<?php
echo '<hr>';
echo '<h5>Ülesanne 4</h5>';
$arv = 1234;
$summa = 0;
while ($arv != 0){
    $number = $arv % 10;
    echo 'Number = '.$number.'<br>';
    $arv = $arv / 10;
    echo 'Arv float = '.$arv.'<br>';
    settype($arv, 'int');
    echo 'Arv int = '.$arv.'<br>';
    $summa += $number;
    echo '<hr>';
}
echo 'Arvu numbrite summa = '.$summa.'<br>';
?>
<?php
// while
/*
 * while(tingimus){
 *      tegevused, mis toimuvad nii kaua
 *      kui tingimus kehtib
 * }
 * */
echo '<h5>Ülesanne 5</h5>';

$arv = 48557812535;
$kordamine = 0;
while($arv != 0){
    $number = $arv % 10;
    echo 'Number = '.$number.'<br>';
    $arv = $arv / 10;
    echo 'Arv float = '.$arv.'<br>';
    settype($arv, 'int');
    echo 'Arv int = '.$arv.'<br>';
    if($number == 5) $kordamine++;
    echo '<hr>';
}
echo 'Number 5 esineb  '.$kordamine.' korda<br>';
?>
