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


?>