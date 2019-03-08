<?php
/* 
 DELETE.PHP
 Deletes a specific entry from the 'players' table
*/

 // connect to the database
 include('connect-db.php');
 
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['Q_no']) && is_numeric($_GET['Q_no']))
 {
 // get id value
 $id = $_GET['Q_no'];
 
 // delete the entry
 $result = mysql_query("DELETE FROM mech WHERE Q_no=$id")
 or die(mysql_error()); 
 
 // redirect back to the view page
 header("Location: admin_database.php");
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: admin_database.php");
 }
 
?>
