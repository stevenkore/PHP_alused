<?php
$kasutajad = array(
    'alice',
    'bob',
    'lucy'
);
for($i = 0; $i < count($kasutajad); $i++){
    echo $i.' - '.$kasutajad[$i].'<br>';
}
echo '<hr>';
foreach ($kasutajad as $kasutaja){
    echo $kasutaja.'<br>';
}
echo '<hr>';
// Tühi array, kuhu hiljem saab andmeid sisestada
$kasutajad2 = array();
$kasutajad2[] = 'alice';
$kasutajad2[] = 'bob';
array_push($kasutajad2, 'lucy');
foreach ($kasutajad2 as $kasutaja2){
    echo $kasutaja2.'<br>';
}
// Eemaldamine massiivi tagant ja eest
echo '<hr>';
array_pop($kasutajad2);
array_shift($kasutajad2);
foreach ($kasutajad2 as $kasutaja2){
    echo $kasutaja2.'<br>';
}
echo '<hr>';
// Andmete vaatamine
var_dump($kasutajad);
echo '<br>';
print_r($kasutajad);
echo '<pre>';
print_r($kasutajad);
echo '</pre>';
echo '<hr>';
// Sorteerime viimasest alates (r)
rsort($kasutajad);
echo '<pre>';
print_r($kasutajad);
echo '</pre>';
echo '<hr>';
// Kahemõõtmeline massiiv
$kasutajad3 = array(
    array(
        'alice',
        'Alice',
        'Liddle',
        'female'
    ),
    array(
        'bob',
        'Bob',
        'Builder',
        'male'
    ),
);
echo '<pre>';
print_r($kasutajad3);
echo '</pre>';
// Värvi lisamine soole
foreach ($kasutajad3 as $kasutaja3){

    if ($kasutaja3[3] == 'male') {
        foreach ($kasutaja3 as $sisuelement) {
            echo '<div style="background-color: blue">' . $sisuelement . '</div>';
        }

    } else if ($kasutaja3[3] == 'female') {
        foreach ($kasutaja3 as $sisuelement) {
            echo '<div style="background-color: red">' . $sisuelement . '</div>';
        }

    } else {
        foreach ($kasutaja3 as $sisuelement) {
            echo '<div style="background-color: green">' . $sisuelement . '</div>';
        }
    }
    echo '<hr>';
}
// Eelmiste andmete näitamine tabelis

echo '<table>';
echo '<tr>
        <th>Kasutaja</th>
        <th>Eesnimi</th>
        <th>Perenimi</th>
        <th>sugu</th>
     </tr>';
foreach ($kasutajad3 as $kasutaja3){
    echo '<tr>';

    if ($kasutaja3[3] == 'male') {
        foreach ($kasutaja3 as $sisuelement) {
            echo '<td style="background-color: blue">' . $sisuelement . '</td>';
        }

    } else if ($kasutaja3[3] == 'female') {
        foreach ($kasutaja3 as $sisuelement) {
            echo '<td style="background-color: red">' . $sisuelement . '</td>';
        }

    } else {
        foreach ($kasutaja3 as $sisuelement) {
            echo '<td style="background-color: green">' . $sisuelement . '</td>';
        }
    }
}
?>

    <!--- Andmestruktuuri loomine mitmemõõtmelise massiivi kasutamisega --->

    <html>
    <head>
        <title>listing 7.1</title>
    </head>
    <body>

    <?php
    $characters = array (
        array (
            name =>"bob",
            occupation =>"superhero",
            age =>30,
            speciality =>"x-ray vision"),
        array (
            name =>"sally",
            occupation =>"superhero",
            age =>24,
            speciality =>"superstrength"),
        array (
            name =>"mary",
            occupation =>"villain",
            age =>63,
            speciality =>"nanotech")
    );
    foreach ($characters as $val)
    {
        foreach ($val as $key=>$final_val)
        {
            print '$key: $final_val<br>';
        }
        print '<br>';
    }
    ?>

    </body>
    </html>

<?php


$first = array('a','b','c');
$second = array(1, 2, 3);
$third = array_merge($first, $second);
foreach ($third as $val)
{
    print '$val<br>';
}


?>