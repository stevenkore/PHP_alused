<?php
// andmed vormist ja arvutused
// kera
$keraRaadius = $_GET['keraRaadius'];
$keraRuumala = 4/3 * pi() * pow($keraRaadius, 3);
// koonus
$koonuseRaadius = $_GET['koonuseRaadius'];
$koonuseKorgus = $_GET['koonuseKorgus'];
$koonuseRuumala = 1/3 * pi() * pow($koonuseRaadius, 2) * $koonuseKorgus;
// silinder
$silindriRaadius = $_GET['silindriRaadius'];
$silindriKorgus = $_GET['silindriKorgus'];
$silindriRuumala = pi() * pow($silindriRaadius, 2) * $silindriKorgus;
// väljastame
echo '<h1>Arvutustulemused</h1>';
echo 'Kera ruumala = '.$keraRuumala.'cm<sup>3</sup></up><br>';
echo 'Koonuse ruumala = '.$koonuseRuumala.'cm<sup>3</sup><br>';
echo 'Silindri ruumala = '.$silindriRuumala.'cm<sup>3</sup><br>';
