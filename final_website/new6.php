<html>
<body>
<form action="./eval.php" method="post">
<?php

$connect = mysql_connect("localhost" ,"root","");

mysql_select_db("aptitude");

  
  
 for ( $i = 1; $i < 11; ++$i )
{
	
$query = mysql_query("SELECT * FROM `main`  ORDER BY RAND() LIMIT 1 ");




 while($rows = mysql_fetch_array($query)):
	
	$q = $rows['Q_no'];
	$qus = $rows['Question'];
	$a = $rows['answer1'];
	$b = $rows['answer2'];
	$c = $rows['answer3'];
	$d = $rows['answer4'];
	$ans = $rows['correct'];
	 
	 echo "Q$i:-$qus <br>";
    echo "A <input type=radio name = 'answer[$q]' value = '$a'></input>$a &nbsp &nbsp"; 
    echo "B <input type=radio name = 'answer[$q]' value = '$b'></input>$b &nbsp &nbsp"; 
    echo "C <input type=radio name = 'answer[$q]' value = '$c'></input>$c &nbsp &nbsp "; 
    echo "D <input type=radio name = 'answer[$q]' value = '$d'></input>$d <br><br> ";
	
	
	endwhile;
 
 }


?>

<center><input name="cmdSubmit" type="submit" id="cmdSubmit" value="Submit"/>
</center>
</form>
</body>
</html>
