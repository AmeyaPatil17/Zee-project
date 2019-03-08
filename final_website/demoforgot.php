<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="forgot" method="post" action="<?php $_SERVER['PHP_SELF'];?>"> 
<p><label for="username">Username:</label> 
<input name="username" type="text" value="" /> 
</p> 
<input type="submit" name="submit" value="submit"/> 
<input type="reset" name="reset" value="reset"/> 
</form> 
<?php 
if(isset($_POST['submit'])) 
{ 
mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("register") or die(mysql_error()); 

$username = $_POST['username']; 
$sql = "SELECT `email`, `repass` FROM `user` WHERE `email` ='$username'";
$query = mysql_query($sql); 

if(!$query)  
    { 
    die(mysql_error()); 
    } 
     
if(mysql_affected_rows() != 0) 
    { 
$row=mysql_fetch_array($query); 
$password=$row["repass"]; 
$email=$row["email"]; 
$subject="Verbazon.net - Password Request"; 
$header="From: speedyboyxxx@gmail.com"; 
$content="Your password is ".$password; 
@mail($email, $subject, $content, $header); 
print "An email containing the password has been sent to you"; 
    } 
else  
    { 
    echo("no such login in the system. please try again."); 
    } 
} 
?>
</body>
</html>