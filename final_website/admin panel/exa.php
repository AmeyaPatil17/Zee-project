<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysqli_connect("localhost","root","","register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$username = $_POST['search_text'];
$result = mysqli_query($con,"SELECT * FROM user
WHERE f_name='$username'");
 echo '<p><a href="admin_index.php"> home</a></p>';
while($row = mysqli_fetch_array($result))
  {
	  				echo'<center>';

	      echo '<table>';
  echo '<p>&nbsp;</p>';
  
      echo '<tr><td class="label"><p>ID:</p></td><td><p>' . $row['m_id'] . '</p></td></tr>';

      echo '<tr><td class="label"><p>Username:</p></td><td><p>' . $row['email'] . '</p></td></tr>';
	        echo '<tr><td class="label"><p>First Name:</p></td><td><p>' . $row['f_name'] . '</p></td></tr>';

      echo '<tr><td class="label"><p>Middle Name:</p></td><td><p>' . $row['m_name'] . '</p></td></tr>';

      echo '<tr><td class="label"><p>Last Name:</p></td><td><p>' . $row['l_name'] . '</p></td></tr>';
	  
      echo '<tr><td class="label"><p>Gender:</p></td><td><p>' . $row['gender'] . '</p></td></tr>';

      echo '<tr><td class="label"><p>Mobile Number:</p></td><td><p>' . $row['mobileno'] . '</p></td></tr>';

      echo '<tr><td class="label"><p>Branch:</p></td><td><p>' . $row['branch'] . '</p></td></tr>';
	        echo '<tr><td class="label"><p>Birth Date:</p></td><td><p>' . $row['b_date'] . '</p></td></tr>';


    echo '</table>';
				echo'</center>';

  }
?>
</body>

</html>