<?php

//Teksti vormindamine
$tekst = 'Hello, this is PHP';
echo strtolower($tekst);
echo '<br>';
echo strtoupper($tekst);

//Ainult esitäht suureks
$tekst = 'Hello, this is PHP';
echo ucfirst(strtolower($tekst));

//Teksti pikkus
$tekst = 'Experience is the teacher of fools';
echo strlen($tekst);
echo '<br>';
echo str_word_count($tekst);

//Teksti kärpimine
$tekst = ' 	A woman should soften but not weaken a man   ';
echo "<pre>$tekst</pre>";
echo "<pre>".trim($tekst)."</pre>";
echo "<pre>".ltrim($tekst)."</pre>";
echo "<pre>".rtrim($tekst)."</pre>";
$tekst = 'A woman should soften but not weaken a man';
echo trim($tekst, "A, a, k..n, w");
$tekst = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo strip_tags($tekst);
$tekst = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo strip_tags($tekst, '<b>, <br>');

//Tekst kui massiiv
$tekst = 'All thinking men are atheists';
echo $tekst[0];
echo '<br>';
echo $tekst[4];

//Kui soovid tekstist mingit osa kätte saada, siis kasuta funktsiooni substr()
$tekst = 'All thinking men are atheists';
echo substr($tekst, 3, 5);
echo '<br>';
echo substr($tekst, 4, -13);
echo '<br>';
echo substr($tekst, -8, 7);

//Mõni rida üles, kasutasime sõnade kokkulugemiseks str_word_count() funktsiooni. Sellele funktsioonile lisades parameetrina 1, loetakse sõnad kui massiivi elemendid.
$tekst = 'All thinking men are atheists';
print_r(str_word_count($tekst, 1));

//Sellest massiivist siis mõne sõna väljakutsumiseks paiguta see esmalt muutujasse ja siis määra indeks.
$tekst = 'All thinking men are atheists';
$sona = str_word_count($tekst, 1);
echo $sona[2];

//Andes str_word_count() funktsioonile parameetri 2, määratakse sõna indeks vastava sümboli indeksiga kogu massiivis.
$tekst = 'All thinking men are atheists';
print_r(str_word_count($tekst, 2));

//Tekstist otsimine
$tekst = 'Happiness in intelligent people is the rarest thing I know.';
$otsitav = 'in';
$leia_tekstist = strpos($tekst, $otsitav, 0);	//4
echo $leia_tekstist;

//Nihke arvutamisel tuleb siis arvesse võtta juba leitud indeksi väärtust ja otsitava sõna pikkus.
$tekst = 'Happiness in intelligent people is the rarest thing I know.';
$otsitav = 'in';
$nihe = 0;
while($leia_tekstist = strpos($tekst, $otsitav, $nihe)){	//4 10 13 48
    echo $leia_tekstist.'<br>';
    $nihe = $leia_tekstist+strlen($otsitav);
}
//Teksti asendamine
$tekst = 'Pai papa, pane paadile punased purjed peale';
$asendus = 'emme';
$otsitav_algus = 4;
$otsitav_pikkus = 4;
echo substr_replace($tekst, $asendus, $otsitav_algus, $otsitav_pikkus);
$tekst = 'Pai papa, pane paadile punased purjed peale';
$asendus = 'emme';
$otsitav = 'papa';
$nihe = 0;
$asenduse_algus = strpos($tekst, $otsitav, $nihe);
$asenduse_markide_arv = strlen($otsitav);
echo substr_replace($tekst, $asendus, $asenduse_algus, $asenduse_markide_arv);

//str_replace() funktsioon
$tekst = 'Musta lehma saba musta lehma taga, valge lehma saba valge lehma taga';
$otsi = 'lehm';
$asenda = 'koer';
echo str_replace($otsi, $asenda, $tekst);

//Selle funktsiooni juures on tore see, et otsitavad ja asendatavad võivad olla massiivis.
$tekst = 'Musta lehma saba musta lehma taga, valge lehma saba valge lehma taga';
$otsi = array('lehm', 'saba', 'taga');
$asenda = array('koer', 'sarv', 'ees');
echo str_replace($otsi, $asenda, $tekst);
echo '<hr><br><br>';
echo '1. Kasutaja lisab vormi nime, seda näiteks suured ja väikesed tähed läbisegi.
Sina kood tervitab teda kenasti nimepidi, kus nimi algab suure algustähega.
Näiteks: sisend–>mARiO; väljund–>Tere, Mario!';
echo '<br><br>';
$mario_nimi = 'mARIO';
echo 'Tere, ' . ucfirst(strtolower($mario_nimi)) . '!';
echo '<br><br>';

echo '2. Kuna on teada, et PHP käsitleb teksti kui massiivi, siis peaks saama seda tsükli abil nö. tükeldada. Ülesandeks on etteantud teksti iga tähe järgi lisada punkt.
Näiteks: sisend–>stalker; väljund–>S.T.A.L.K.E.R.';
echo '<br><br>';
$stalker = 'stalker';
$stalker_array = (str_split($stalker));
echo strtoupper(implode('.', $stalker_array));
echo '<br><br>';
echo '3. Koosta tekstiväli, mis kuvab kasutaja sisestatud sõnumeid. Kasutaja ropud sõnad asendatakse tärnidega.
Näiteks: sisend–>Sa oled täielik noob; väljund–>Sa oled täielik ***';
?>
<html>
<br><br>
<form method="get">
    <input name="message" type="text">
    <button type="submit">Saada</button>
</form>

<br>
</html>
<?php
$message = $_GET['message'];
$roppused = array('savi', 'loll', 'taun', 'noob');
$tarnid = '****';
echo str_replace($roppused, $tarnid, $message) . '<br>';

echo '4. Kasutajalt saadud eesnime ja perenime põhjal luuakse talle email lõpuga @hkhk.edu.ee. Kusjuures täpitähed asendatakse ä->a, ö->o, ü->y, õ->o ja kogu email on väikeste tähtedega
Näiteks: sisend–>Ülle ja Doos; väljund–>ylle.doos@hkhk.edu.ee';
echo '<br><br>';
$kasutaja_eesnimi = 'ylle';
$kasutaja_perenimi = 'doos';
echo str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'u', 'o'), mb_strtolower($kasutaja_eesnimi . '.' . $kasutaja_perenimi . '@hkhk.edu.ee'));

?>

