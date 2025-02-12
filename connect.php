<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$localhost = "localhost";
$db = "minecraft_project";
$user = "root";
$password_d = "";
$link = mysqli_connect($localhost, $user, $password_d) or
trigger_error(mysql_error(),E_USER_ERROR);
mysqli_query($link, "SET NAMES cp1251;") or die(mysql_error());
mysqli_query($link, "SET CHARACTER SET cp1251;") or die(mysql_error());
?> 