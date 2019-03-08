<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['user_id'])) {
    if (isset($_COOKIE['user_id']) && isset($_COOKIE['username'])) {
      $_SESSION['user_id'] = $_COOKIE['user_id'];
      $_SESSION['username'] = $_COOKIE['username'];
    }
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.index {
	border-top-width: thin;
	border-right-width: thin;
	border-bottom-width: thin;
	border-left-width: thin;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	height: 300px;
	width: 500px;
	margin-top: 100px;
	margin-right: 10px;
	margin-bottom: 10px;
	margin-left: 600px;
}
</style>
</head>

<body>
<?php
  
  require_once('../connectvars.php');

  // Generate the navigation menu
  if (isset($_SESSION['username'])) {
	 
	echo'<div class="index">';  
	
	echo '<p>Welcome  ' . $_SESSION['username'] . '</p>' ;
	echo '<p>&nbsp;</p>';
	echo '<p>&nbsp;</p>';
	echo'<center><h2>ADMIN CONTROL PANEL</h2></center>';
    echo'<p><a href="admin_logout.php"><center>LOGOUT</center></a>  </p>';

echo'<center>To search user & their reecord please <a href="admin_user_search.php">click here.</a></center>';
echo'<br />';
echo'<center>To search question & edit question please <a href="admin_database.php">click here.</a></center>';  
	echo'</div>';  

  }
  else {
    echo ' <a href="admin_login.php">Log In</a><br />';
  }

  // Connect to the database 
  $dbc=mysqli_connect("localhost","root","","register");

  // Retrieve the user data from MySQL
  $query = "SELECT m_id, f_name FROM admin WHERE f_name IS NOT NULL";
  $data = mysqli_query($dbc, $query);

  // Loop through the array of user data, formatting it as HTML
  
 

  mysqli_close($dbc);
?>
</body>
</html>