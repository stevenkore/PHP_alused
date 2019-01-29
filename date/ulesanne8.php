<?php
/**
 * Created by PhpStorm.
 * User: steven.kore
 * Date: 21.01.2019
 * Time: 14:56
 */
/*
Ülesanne 8
Kuva kuupäev ja kellaaeg formaadis 20.03.2013 12:31
Kuva tänane eestikeelne nädalapäev, N: kolmapäev
Kuva eestikeelne kuupäev koos nädalapäevaga. Näiteks: 23.veebruar 2013 laupäev
Leia mitu päeva on jäänud järgmise jaanipäevani. Näiteks: 2014 aasta jaanipäevani on jäänud 236 päeva!
Minu sünnipäev on 06.11.1980! Leia kumb on meist vanem. Kuva mõlema sünnikuupäevad ning vahe aastates.
Maailmalõpp saabub 29.02.2016! Las PHP otsustab, kas see on võimalik.
Leia, kas sul on järgmine aasta juubel?
Koosta kood, mis tervitab sind vastavalt ajale. N: 8:00+ “Tere hommikust!”, 13:00+ “Tere päevast!” ja 17:00+ “Tere õhtust!”
 */
echo time(); //1548066443
echo"<hr>";
echo date('d.m.Y G:i' , time());	//21.01.2019 11:12
echo"<hr>";
date_default_timezone_set('Europe/Tallinn');
//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta;	//21.jaanuar 2019
echo"<hr>";
echo date('d.F.Y'); //21.January.2019
echo"<hr>";
//mktime(tunnid, minutid, sekundid, kuu, päev, aasta, suveaeg)
$sp = mktime(0,0,0,10,29,1969);
echo date('d.m.Y', $sp);	//29.10.1969
echo"<hr>";
echo date('d.m.Y G:i' , time()+60);
echo "<br>";//1min pärast
echo date('d.m.Y G:i' , time()+60*60);
echo "<br>";//1h pärast
echo date('d.m.Y G:i' , time()+60*60*24);
//24h pärast
echo "<hr>";
echo strtotime("now");
echo "<br>";
echo strtotime("tomorrow");
echo "<br>";
echo strtotime("yesterday");
echo "<br>";
echo strtotime("10 September 2000");
echo "<br>";
echo strtotime("+1 day");
echo "<hr>";
$sp = mktime(12,31,0,03,20,2013);
echo date('d.m.Y G:i', $sp);
echo "<hr>";
$eesti_paevad = array(1=>'esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede', 'laupäev', 'pühapäev');
$paev1=$eesti_paevad[date('n')];
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta.' '.$paev1;	//29.jaanuar 2019
echo "<hr><br>";
// Järgmine jaanip2ev
$d1=strtotime("June 24");
$d2=ceil(($d1-time())/60/60/24);
echo "Järgmise Jaanipäevani on " . $d2 ." päeva";
echo "<hr><br>";
//sünnipeäva arvutamine
$userDob = '1980-06-11';
$userDob2 = '1996-04-18';
// date time infost mis on üleval
$dob = new DateTime($userDob);
$dob2 = new DateTime($userDob2);
// võrdlemine hetke kuupäeva ja sünnipäevaga
$now = new DateTime();
$now2 = new DateTime();
// vahe sünnipäeval ja hetke kuupäeval
$difference = $now->diff($dob);
$difference2 = $now2->diff($dob2);
//tema vanus, minu vanus ja vahe.
$age = $difference->y;
$age2 = $difference2->y;
$vahe = $age - $age2;
//Print
echo "Võrreldav inimene: " . $age. "aastat";
echo "<hr><br>";
echo "Minu vanus: ". $age2. "aastat";
echo "<hr><br>";
echo "Meie vanuse vahe: ".$vahe. "aastat";
echo "<hr><br>";
//Juubel
echo "Ütleb kas on juubel või ei";
echo "<hr><br>";
$vanus = '22';
$juubel = $vanus + '1';
if ($juubel == 22){
    echo "Jah on juubel";
}
else if ($juubel == 23)
{
    echo 'Ei ole juubel';
}
$aeg = new Date();
$tund = now.getHours();
if ($tund > 0) $s6num = "edu";
if ($tund > 6) $s6num = "edu";
if ($tund > 12) $s6num = "edu";
if ($tund > 17) $s6num = "edu";
if ($tund > 22) $s6num = "edu";
echo $s6num;