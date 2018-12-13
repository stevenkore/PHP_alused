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