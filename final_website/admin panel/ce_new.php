<?php
/* 
 NEW.PHP
 Allows user to create a new entry in the database
*/
 
 // creates the new record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($q, $a, $b, $c, $d, $correct )
 {
 ?>
 
  <?php
$con = mysql_connect("localhost","root","");
mysql_select_db("aptitude",$con);

if(isset($_POST['submit2']))
	{
		$file = $_FILES['file']['tmp_name'];
		
		
		$handle = fopen($file,"r");
		
		while(($fileop = fgetcsv($handle,1000,",")) !== false)
		
		{
		$question = $fileop[0];
		$answer1 = $fileop[1];
		$answer2 = $fileop[2];
		$answer3 = $fileop[3];
		$answer4 = $fileop[4];
		$correct = $fileop[5];
		
		$sql = mysql_query("INSERT INTO ce(Question,answer1,answer2,answer3,answer4,correct) VALUES('$question','$answer1','$answer2','$answer3','$answer4','$correct')");
		}
	
		if($sql)
		{ 
		echo "Data Uploaded successfully";
		}

	}

?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>New Record</title>
 </head>
 <body>
 
 
 <form action="" method="post">
 <div align="center">
 <strong>Question: </strong> <input type="text" name="Question" value="<?php echo $q; ?>" /><br/>
 <strong>Option A: </strong> <input type="text" name="answer1" value="<?php echo $a; ?>" /><br/>
 <strong>Option B: </strong> <input type="text" name="answer2" value="<?php echo $b; ?>" /><br/>
 <strong>Option C: </strong> <input type="text" name="answer3" value="<?php echo $c; ?>" /><br/>
 <strong>Option D: </strong> <input type="text" name="answer4" value="<?php echo $d; ?>" /><br/>
 <strong>Correct ANS:</strong> <input type="text" name="correct" value="<?php echo $correct; ?>" /><br/>

 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 
 <form action="ce_new.php" method="post"
enctype="multipart/form-data"><center>
<p>IF you want to Add more no. of Question select a file from location and hit submit</p>
<p>PLEASE ONLY SELECT  '.csv' file OTHER FIlE MAY CAUSE DAMAGE IN DATABASE</p>
<label for="file">Browse The File:</label>
<input type="file" name="file" ><br>
<input type="submit" name="submit2" value="Submit"></center>
</form>
 </body>
 </html>
 <?php 
 }
 
 
 

 // connect to the database
 include('connect-db.php');
 
 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // get form data, making sure it is valid
 $q = mysql_real_escape_string(htmlspecialchars($_POST['Question']));
 $a = mysql_real_escape_string(htmlspecialchars($_POST['answer1']));
  $b = mysql_real_escape_string(htmlspecialchars($_POST['answer2']));
   $c = mysql_real_escape_string(htmlspecialchars($_POST['answer3']));
    $d = mysql_real_escape_string(htmlspecialchars($_POST['answer4']));
	 $correct = mysql_real_escape_string(htmlspecialchars($_POST['correct']));
 
 // check to make sure both fields are entered
 if ($q == '' || $a == ''|| $b == ''|| $c == ''|| $d == ''|| $correct == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 // if either field is blank, display the form again
 renderForm($q, $a, $b, $c, $d, $correct );
 }
 else
 {
 // save the data to the database
 mysql_query("INSERT ce SET Question='$q',  answer1='$a',  answer2='$b',  answer3='$c',  answer4='$d', correct='$correct'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: admin_database.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','','','');
 }
?> 