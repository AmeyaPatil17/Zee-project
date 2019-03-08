<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="./eval.php" method="post">
<?php

$connect = mysql_connect("localhost" ,"root","");

mysql_select_db("aptitude");

  $page = $_SERVER['REQUEST_URI'];
// Defaults
if(!isset($_SESSION[$page]['count']))
{
    $_SESSION[$page]['count'] = 1;
    $_SESSION[$page]['first_hit'] = time();
    $_SESSION[$page]['banned'] = false;
}
else
{
    $_SESSION[$page]['count']++; // Increase the counter
}

// If person is banned, end script
if($_SESSION[$page]['banned'] == true)
{
    die();
}

if($_SESSION[$page]['first_hit'] < time() - 30)
{
    $_SESSION[$page]['count'] = 1; // Reset every 30 seconds
}

if($_SESSION[$page]['count'] > 100)
{
    $_SESSION[$page]['banned'] = true; 
    // Ban if they hit over 100 times in 30 seconds.
}
  

	
$query = mysql_query("SELECT * FROM `main`  ORDER BY RAND() LIMIT 10 ");

 


 while($rows = mysql_fetch_array($query)):
	
	$q = $rows['Q_no'];
	$qus = $rows['Question'];
	$a = $rows['answer1'];
	$b = $rows['answer2'];
	$c = $rows['answer3'];
	$d = $rows['answer4'];
	$ans = $rows['correct'];
	
	echo"<p></p>";
	 echo " Question:-&nbsp;$qus <br>";

    echo "Options:-&nbsp;A <input type=radio name = 'answer[$q]' value = '$a'></input>$a &nbsp &nbsp"; 
    echo "B <input type=radio name = 'answer[$q]' value = '$b'></input>$b &nbsp &nbsp"; 
    echo "C <input type=radio name = 'answer[$q]' value = '$c'></input>$c &nbsp &nbsp "; 
    echo "D <input type=radio name = 'answer[$q]' value = '$d'></input>$d <br><br> ";
	
	
	endwhile;

 


?>

<center><input name="cmdSubmit" type="submit" id="cmdSubmit" value="Submit"/>
</center>
</form>

</body>
</html>