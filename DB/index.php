<?php

require_once 'fail.php';
require_once 'dbfnc.php';

$iktConn = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);

// insert
$sql = 'UPDATE user SET last_name="Ebatavaline" WHERE user_id=1';
$res = query($sql, $iktConn);

// select
$sql = 'SELECT * FROM user';
$users = getData($sql, $iktConn);

echo '<pre>';
print_r($users);
echo '</pre>';

echo 'Tere, '.$users[0]['first_name'].' '.$users[0]['last_name'].'<br>';

$sql = 'SELECT NOW()';
$aeg = getData($sql, $iktConn);
echo '<pre>';
print_r($aeg);
echo '</pre>';

echo $aeg[0]['NOW()'].'<br>';
