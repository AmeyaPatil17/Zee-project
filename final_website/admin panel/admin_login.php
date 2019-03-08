<?php
  require_once('../connectvars.php');

  // Start the session
  session_start();

  // Clear the error message
  $error_msg = "";

  // If the user isn't logged in, try to log them in
  if (!isset($_SESSION['user_id'])) {
    if (isset($_POST['submit'])) {
      // Connect to the database
      $dbc=mysqli_connect("localhost","root","","register");

      // Grab the user-entered log-in data
      $user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
      $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));

      if (!empty($user_username) && !empty($user_password)) {
        // Look up the username and password in the database
        $query = "SELECT m_id, email FROM admin WHERE email = '$user_username' AND repass = '$user_password'";
        $data = mysqli_query($dbc, $query);

        if (mysqli_num_rows($data) == 1) {
          // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
          $row = mysqli_fetch_array($data);
          $_SESSION['user_id'] = $row['m_id'];
          $_SESSION['username'] = $row['email'];
          setcookie('user_id', $row['m_id'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
          setcookie('username', $row['email'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
          $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/admin_index.php';
          header('Location: ' . $home_url);
        }
        else {
          // The username/password are incorrect so set an error message
          $error_msg = '<span style="color:#FF0000;">Sorry, you must enter a valid username and password to log in.</span>';
        }
      }
      else {
        // The username/password weren't entered so set an error message
        $error_msg = '<span style="color:#FF0000;">Sorry, you must enter your username and password to log in.</span>';
      }
    }
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.login {
	height: 290px;
	width: 500px;
	border: thin solid #333;
	margin-top: 0px;
	margin-right: 4px;
	margin-bottom: 0px;
	margin-left: 600px;
}
-->
</style>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">

<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
</head>

<body>
  <?php
  // If the session var is empty, show any error message and the log-in form; otherwise confirm the log-in
  if (empty($_SESSION['user_id'])) {
    echo '<p class="error">' . $error_msg . '</p>';
?>
    <form class="login"method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
    
        
    <h3 class="TextH3"><center>Sign in</center></h3>
    
    <div class="LayoutRow">
        <p class="TextH5">
        <label for="emailID"><center>Email ID</center></label></p>
                <p><span id="sprytextfield5">
                <center>  <input type="text" id="emailID" name="username" class="FormInputFull FormTextField TextSmall" placeholder="someone@example.com" /></center>
                <span class="textfieldRequiredMsg"><img src="../Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;A value is required.</span><span class="textfieldInvalidFormatMsg"><img src="../Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Invalid format.</span></span></p>
</div>
            
      <div class="LayoutRow">
        <p class="TextH5"><label for="password"><center>Password</center></label></p>
          <p><span id="sprypassword5">
        <center>  <input type="password" id="password" name="password" class="FormInputFull FormTextField TextSmall" placeholder="Password"></center>
          <span class="passwordRequiredMsg"><img src="../Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;A value is required.</span><span class="passwordMinCharsMsg"><img src="../Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Minimum number of characters not met.</span><span class="passwordMaxCharsMsg"><img src="../Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Exceeded maximum number of characters.</span></span></p>
        </div>

            
 
    	
     <center> <p><input name="submit" type="submit" value="Login"></p></center>

  </form>
  <?php
  }
  else {
    // Confirm the successful log-in
    echo('<p class="login">You are logged in as ' . $_SESSION['username'] . '.</p>');
  echo'<p><a href="admin_logout.php">LOGOUT</a>  </p>';
  }
?>
<script type="text/javascript">
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "email", {validateOn:["blur"]});
var sprypassword5 = new Spry.Widget.ValidationPassword("sprypassword5", {minChars:6, maxChars:30, validateOn:["blur"]});
</script>
</body>
</html>