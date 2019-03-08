<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$_SESSION['testcomplete'] = 'yes';
$connect = mysql_connect("localhost" ,"root","");

mysql_select_db("aptitude");
$answers = $_POST['answer'];

$score = 0;
{
			 echo<<<EOT
<p> <table  width = "75%"  border="0" align ="default">
		<tr>
			<td>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td><table border="0" align ="default">
				
				<tr>
					<td width = "400"><font face = "georgia" size ="4" color= "blue"><u><b>Your answers are:</b></u></font></td>
					<td width = "400"><font face = "georgia" size ="4" color= "blue"><b><u>Correct answers are: </u></b></font></td>
					<td><font face = "georgia" size ="4" color= "blue"><b><u>Results</u></b></font></td>
				</tr>
				
				
				<tr>
				</table>
		</td>
	</tr>
</table>

EOT;

}

    foreach($answers as $question => $answer){
         $query = mysql_query("SELECT correct FROM `main` where Q_no = $question");
         $result  = mysql_fetch_array($query);
		 	$right = $result['correct'];
			

         if ($result['correct']==$answer){
             
			  $score++;$score++;
			  $ans = "<img src="."'images/tick.png'"."/>";
			  {
			 echo<<<EOT
<p> <table  width = "75%"  border="0" align ="default">
		<tr>
			<td>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td><table border="0" align ="default">
				
				<tr>
					<td width = "400"><font face = "georgia" size ="4" color= "blue"><u><b></b></u></font></td>
					<td width = "400"><font face = "georgia" size ="4" color= "blue"><b><u></u></b></font></td>
					<td><font face = "georgia" size ="4" color= "blue"><b><u></u></b></font></td>
				</tr>
				
				
				<tr>
					<td><font face ="georgia" size ="3">$answer</font> </td>
					<td><b>$right </b></td>
					<td align ="center">  <font face ="georgia" size ="6" color= "green"><b>$ans</b></font></td>
				</tr>
				<tr>
				</table>
		</td>
	</tr>
</table>

EOT;

}
         }else{
              
			  $score--;
				$ans = "<img src="."'images/wrong.png'"."/>";
				{
			 echo<<<EOT
<p> <table  width = "75%"  border="0" align ="default">
		<tr>
			<td>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td><table border="0" align ="default">
				
				<tr>
					<td width = "400"><font face = "georgia" size ="4" color= "blue"><u><b></b></u></font></td>
					<td width = "400"><font face = "georgia" size ="4" color= "blue"><b><u></u></b></font></td>
					<td><font face = "georgia" size ="4" color= "blue"><b><u></u></b></font></td>
				</tr>
				
				
				<tr>
					<td><font face ="georgia" size ="3">$answer</font> </td>
					<td><b>$right </b></td>
					<td align ="center">  <font face ="georgia" size ="6" color= "green"><b>$ans</b></font></td>
				</tr>
				
				</table>
		</td>
	</tr>
</table>

EOT;

}
				
         }
		  

    }
	
	{
			 echo<<<EOT
<p> <table  width = "75%"  border="0" align ="default">
	<tr><td>&nbsp;&nbsp;&nbsp;</td></tr>
				<tr><td>&nbsp;&nbsp;&nbsp;</td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr  ><td  colspan ="3" align ="center" ><font face = "georgia" size ="4" color= "blue"><b>Your score is:  $score out of 50</b></font></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
	</table>
		</td>
	</tr>
</table>

EOT;

}
?>
    
</body>
</html>