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
 mysql_query("INSERT main SET Question='$q',  answer1='$a',  answer2='$b',  answer3='$c',  answer4='$d', correct='$correct'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: view.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','','','');
 }
?> 