<?php

$sname="localhost";
$uname="root";
$password="root";
$db_name="shopee";
$con=mysqli_connect($sname,$uname,$password,$db_name);
if(!$con){
    echo("Connection failed");
    exit();
}

?>