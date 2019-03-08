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

<?php

  $dbc=mysqli_connect("localhost","root","","register");

 $query = "SELECT * FROM exam WHERE m_id = '" . $_SESSION['user_id'] . "'";
      $data = mysqli_query($dbc, $query);
      if (mysqli_num_rows($data) == 0) {
        // The username is unique, so insert the data into the database
		$member = $_SESSION['user_id'];
        $query = "INSERT INTO exam (m_id) VALUES ('$member')";
        mysqli_query($dbc, $query);
	  }

 
?>

<?php
$dbc=mysqli_connect("localhost","root","","register");$query =("SELECT m_id, t_complete, tt_complete FROM `exam` WHERE m_id= '" . $_SESSION['user_id'] . "' ");
$data = mysqli_query($dbc, $query);

  if (mysqli_num_rows($data) == 1) {
    // The user row was found so display the user data
    $row = mysqli_fetch_array($data);

if ($row['tt_complete'] == 'y'){
	echo'EXAM IS OVER
';
exit();
}
else{
    include("inc_technicaltest.php");
	}
  }
?>
