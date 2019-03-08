<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_aptitude = "localhost";
$database_aptitude = "aptitude";
$username_aptitude = "root";
$password_aptitude = "";
$aptitude = mysql_pconnect($hostname_aptitude, $username_aptitude, $password_aptitude) or trigger_error(mysql_error(),E_USER_ERROR); 
?>