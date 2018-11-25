<?php
$host="localhost";
$uname="root";
$pass="";
$db="upload";
$prefix = "";

$con=mysql_connect("$host","$uname","$pass") or die(mysql_error()); 
@mysql_select_db("$db");
?>