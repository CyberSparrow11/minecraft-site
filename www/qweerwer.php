<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_qweerwer = "localhost";
$database_qweerwer = "minecraft_project";
$username_qweerwer = "root";
$password_qweerwer = "8902432";
$qweerwer = mysql_pconnect($hostname_qweerwer, $username_qweerwer, $password_qweerwer) or trigger_error(mysql_error(),E_USER_ERROR); 
?>