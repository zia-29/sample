<?php
$db['db_host']="localhost";
$db['db_user']="root";
$db['db_pass']="";
$db['db_name']="sample";

foreach($db as $key => $values){
    define(strtoupper($key),$values);
}

 $connection=mysqli_connect('localhost','root','','sample');

?>