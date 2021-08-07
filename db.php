<?php

$db['db_host'] = 'remotemysql.com';
$db['db_user'] = 'LydSLSny7j';
$db['pass']= 'hOWxQIyzud';
$db['database']= 'LydSLSny7j';
foreach ($db as $key => $value){
    define(strtoupper($key),$value);

}
$connect = mysqli_connect(DB_HOST , DB_USER, PASS,DATABASE);
if(!$connect)
{
    die('Connection Lost');
}


?>
