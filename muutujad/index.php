<?php
/**
 * Created by PhpStorm.
 * User: steven.kore
 * Date: 13.12.2018
 * Time: 13:08
 */
// muutujad defineeritakse
// muutuja_nimi * väärtus

$taisarv = 3;
$reaalarv = 3.3;
$string='kolm';
$booleanTrue= true;
$booleanFalse= false;
echo 'Täisarv '.$taisarv.'<br>';
echo 'reaalarv '.$reaalarv.'<br>';
echo 'String '.$string.'<br>';
// booleanTrue ja False
echo 'true'.$booleanTrue.'<br>';
echo 'false'.$booleanFalse.'<br>';
echo '<hr>';
echo gettype($string);
$summa = $taisarv . $taisarv;
echo gettype($summa);
echo '<br>Summa = '.$summa.'<br>';


?>

<?php
// operaatorid

$arv1 = 42;
$arv2 = 11;

echo '<h4>Matemaatilised operaatorid</h4>';

echo $arv1.' - '.$arv2.' = '.($arv1 + $arv2).'<br>';
echo $arv1.' - '.$arv2.' = '.($arv1 - $arv2).'<br>';
echo $arv1.' * '.$arv2.' = '.($arv1 * $arv2).'<br>';
echo $arv1.' / '.$arv2.' = '.($arv1 / $arv2).'<br>';
echo $arv1.' % '.$arv2.' = '.($arv1 % $arv2).'<br>';

echo '<hr>';

echo '<h4>Võrdlus operaatorid</h4>';

echo $arv1.' < '.$arv2.' see on '.($arv1 < $arv2).'<br>';
echo $arv1.' > '.$arv2.' see on '.($arv1 > $arv2).'<br>';
echo $arv1.' <= '.$arv2.' see on '.($arv1 <= $arv2).'<br>';
echo $arv1.' >= '.$arv2.' see on '.($arv1 >= $arv2).'<br>';
echo $arv1.' == '.$arv2.' see on '.($arv1 == $arv2).'<br>';
echo $arv1.' != '.$arv2.' see on '.($arv1 != $arv2).'<br>';

?>
