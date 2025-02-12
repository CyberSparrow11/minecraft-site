<?php 
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true" 
$localhost = "localhost";
$db = "minecraft_project"; 
$user = "admin";
$password = "admin"; 
$link = mysqli_connect($localhost, $user, $password) or
trigger_error(mysql_error(),E_USER_ERROR); 

?>