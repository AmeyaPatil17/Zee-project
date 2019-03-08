<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_register = "localhost";
$database_register = "register";
$username_register = "root";
$password_register = "";
$register = mysql_pconnect($hostname_register, $username_register, $password_register) or trigger_error(mysql_error(),E_USER_ERROR); 
?>