<?php
/**
 * Created by PhpStorm.
 * User: steven.kore
 * Date: 18.12.2018
 * Time: 14:43
 */

$kasutajad = array(
    'alice',
    'bob',
    'lucy'
);

for($i = 0; $i < count($kasutajad); $i++){
    echo $i.' - '.$kasutajad[$i].'<br>';
}
?>
<?php

$kasutajad = array();

$kasutajad[] = 'alice';
$kasutajad[] = 'bob';

array_push($kasutajad, 'lucy');
// var_dump($kasutajad);

foreach($kasutajad as $kasutaja) {
    echo $kasutaja.'<br>';
}

echo '<hr>';
array_shift($kasutajad); //lükkab esimese välja
array_pop($kasutajad); //lükkab teise välja

foreach($kasutajad as $kasutaja) {
    echo $kasutaja.'<br>';
}

echo '<hr>';

?>
<?php

$kasutajad = array();
$kasutajad[] = 'alice';
$kasutajad[] = 'bob';
array_push($kasutajad, 'lucy');
echo '<pre>';
var_dump($kasutajad);
echo '</pre>';

echo '<hr>';

echo '<pre>';
print_r($kasutajad);
echo '</pre>';

?>

<?php
echo '<hr>';
$kasutajad = array(
    array(
        'alice',
        'Alice',
        'Liddle'
    ),
    array(
        'bob',
        'Bob',
        'Builder'
    )
);
echo '<hr>';
echo '<pre>';
print_r($kasutajad);
echo '</pre>';
?>
