<?php
echo 'Näide 1<br><br>';
$num = -321;
$newnum = abs( $num );
echo $newnum.'<br><hr>';

echo 'Näide 2<br>';
function bighello() {
    echo '<h1>HELLO!</h1><br><hr>';
}
bighello();

echo 'Näide 3<br><br>';
function printBR($txt) {
    echo ($txt.'<br>');
}
printBR('This is a line');
printBR('This is another line');
printBR('This is yet another line<hr>');

echo 'Näide 4<br><br>';
function addNums($firstnum, $secondnum) {
    $result = $firstnum + $secondnum;
    return $result;
}
echo addNums(3,5).'<br><hr>';

echo 'Näide 5<br><br>';
function sayHello()
{
    echo'hello<br>';
}
$function_holder = 'sayHello';
$function_holder();
echo '<hr>';

echo 'Näide 6<br><br>';
function test()
{
    $testvariable = 'this is a test variable';
}
echo 'test variable: '.$testvariable.'<hr>';

echo 'Näide 7<br><br>';
$life = 42;
function meaningOfLife()
{
    global $life;
    print 'The meaning of life is '.$life.'<hr>';
}
meaningOfLife();

echo 'Näide 8<br><br>';
$num_of_calls = 0;
function andAnotherThing($txt) {
    global $num_of_calls;
    $num_of_calls++;
    print '<h1>'.$num_of_calls.'. '.$txt.'</h1>';
}
andAnotherThing('Widgets');
print ('We build a fine range of widgets');
andAnotherThing('Doodads');
print ('Finest in the world<hr>');

echo 'Näide 9<br><br>';
function fontWrap( $txt, $size) {
    echo '<font size='.$size.' face=\'Helvetica,Arial,Sans-Serif\'>'.$txt.'</font>';
}
fontWrap('A heading<br>',5);
fontWrap('Some body text<br>',3);
fontWrap('Some more body text<br>',3);
fontWrap('Yet more body text<br>',3);
echo '<hr>';

echo 'Näide 10<br><br>';
function addFive(&$num)
{
    $num += 5;
}
$orignum = 10;

addFive($orignum);
print($orignum);

echo '<hr>';


?>

<style>
    table, tr, td{
        border: solid 2px black;
        border-collapse: collapse;
        padding: 3px;
    }
</style>
<?php

echo 'Ülesanne 1<br><br>';

function tabel($txt1 ,$txt2 ,$txt3 , $txt4){
    echo '<table>';
   echo '<tr>';
   for($i = 1; $i <=4; $i++) {
       echo '<td>';
        echo ${'txt'.$i};
       echo '</td>';
   }
    echo '</tr>';
    echo '</table>';
}

tabel('see', 'on', 'minu','rida');

?>

