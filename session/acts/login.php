<?php
require_once '../DB/fail.php';
require_once '../DB/dbfnc.php';

// andmed HTML vormi poolt
$username = $_GET['uname'];
$password = $_GET['upass'];
$ikt = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);
$sql = 'SELECT * FROM user WHERE username="'.$username.'" AND password="'.md5($password).'"';
$users = getData($sql, $ikt);


if($users !== false){
    session_start();
    $_SESSION['user'] = $users[0];
    header('Location: ../index.php');
}