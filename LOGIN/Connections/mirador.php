<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_mirador = "localhost";
$database_mirador = "usuarios_mirador_del_bosque";
$username_mirador = "root";
$password_mirador = "";
$mirador = mysql_pconnect($hostname_mirador, $username_mirador, $password_mirador) or trigger_error(mysql_error(),E_USER_ERROR); 
?>