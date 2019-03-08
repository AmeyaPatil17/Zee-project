<html>
<?php

$connect = mysql_connect("localhost" ,"root","");

mysql_select_db("aptitude");
  
  
 for ( $i = 0; $i < 30; ++$i )
{
$query = mysql_query("SELECT * FROM `main` ORDER BY RAND() LIMIT 1 ");




 while($rows = mysql_fetch_array($query)):
	
	$q = $rows['Q_no'];
	$qus = $rows['Que'];
	$a = $rows['A'];
	$b = $rows['B'];
	$c = $rows['C'];
	$d = $rows['D'];
	
	
	echo "Q$q:-$qus <br>";
	echo "A<input type = radio name = '$q' value = '$a'></input>$a &nbsp &nbsp"; 
	echo "B<input type = radio name = '$q' value = '$b'></input>$b &nbsp &nbsp"; 
	echo "C<input type = radio name = '$q' value= '$c'></input>$c &nbsp &nbsp "; 
	echo "D<input type = radio name = '$q' value = '$d'></input>$d <br><br> "; 
	
	
	endwhile;
 
 }

?>

<center><input name="cmdSubmit" type="submit" id="cmdSubmit" value="Submit"/>
</center>
</html>
