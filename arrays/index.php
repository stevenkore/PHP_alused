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

<?php
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
foreach ($kasutajad as $kasutaja){
    foreach ($kasutaja as $element){
        echo $element.'<br>';
    }
    echo '<hr>';
}
?>

<?php

$kasutajad = array(
    array(
        'alice',
        'Alice',
        'Liddle',
        'Female'
    ),
    array(
        'bob',
        'Bob',
        'Builder',
        'Male'
    )
);

foreach ($kasutajad as $kasutaja){
    for($i = 0; $i < count($kasutaja); $i++){
        if($kasutaja[3] == 'female'){
        echo '<div style="color: red">';
        } else {
            echo '<div style="color: blue">';
        }
        echo $kasutaja[$i].'</div>';
    }
}
echo '<hr>';
?>


