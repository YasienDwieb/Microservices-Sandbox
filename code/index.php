<?php
$a = 9;
$b = 19;
echo "hello world: {$a}+{$b} = " . strval(intval($a) + intval($b))."<br/>";

$host="db";
$db=getenv('MYSQL_DATABASE');
$user=getenv('MYSQL_USER');
$pass=getenv('MYSQL_PASSWORD');
$port=getenv('MYSQL_PORT');

$conn= mysqli_connect($host,$user,$pass,$db,$port);

var_dump($conn);