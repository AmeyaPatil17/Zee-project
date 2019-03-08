<?php
  require_once('connectvars.php');

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
        $query = "SELECT m_id, email FROM user WHERE email = '$user_username' AND repass = '$user_password'";
        $data = mysqli_query($dbc, $query);

        if (mysqli_num_rows($data) == 1) {
          // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
          $row = mysqli_fetch_array($data);
          $_SESSION['user_id'] = $row['m_id'];
          $_SESSION['username'] = $row['email'];
          setcookie('user_id', $row['m_id'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
          setcookie('username', $row['email'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
          $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
	background-image: url(bg.jpg);
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
}
/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing block. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px;
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}
/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color: #000000;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}
/* ~~ This fixed width container surrounds all other blocks ~~ */
.container {
	width: 960px;
	background-color: #FFFFFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
}
/* ~~ The header is not given a width. It will extend the full width of your layout. ~~ */
header {
	background-color: #ADB96E;
	height: 130px;
	background-image: url(banner.png);
	background-position: center;
}
/* ~~ These are the columns for the layout. ~~ 

1) Padding is only placed on the top and/or bottom of the block elements. The elements within these blocks have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the block itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the block element and place a second block element within it with no width and the padding necessary for your design.

2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a block set to float right). Many times, padding can be used instead. For blocks where this rule must be broken, you should add a "display:inline" declaration to the block element's rule to tame a bug where some versions of Internet Explorer double the margin.

3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar blocks could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.

4) If you prefer your nav on the left instead of the right, simply float these columns the opposite direction (all left instead of all right) and they'll render in reverse order. There's no need to move the blocks around in the HTML source.

*/
.sidebar1 {
	float: left;
	width: 180px;
	background-color: #EADCAE;
	padding-bottom: 10px;
	background-image: url(sidebar.jpg);
}
.content {
	padding: 10px 0;
	width: 780px;
	float: right;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol {
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
nav ul{
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
}
nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
}
nav a, nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
	width: 160px;  /*this width makes the entire button clickable for IE6. If you don't need to support IE6, it can be removed. Calculate the proper width by subtracting the padding on this link from the width of your sidebar container. */
	text-decoration: none;
	background-color: #C6D580;
}
nav a:hover, nav a:active, nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background-color: #ADB96E;
	color: #FFF;
}

/* ~~ The footer ~~ */
footer {
	padding: 10px 0;
	background-color: #999999;
	position: relative;/* this gives IE6 hasLayout to properly clear */
	clear: both; /* this clear property forces the .container to understand where the columns end and contain them */
	color: #FFF;
}

/*HTML 5 support - Sets new HTML 5 tags to display:block so browsers know how to render the tags properly. */
header, section, footer, aside, article, figure {
	display: block;
}
.logo {
}
.logo {
}
.login {
	float: right;
	height: 390px;
	width: 300px;
	border: thin solid #333;
	margin-top: 0px;
	margin-right: 4px;
	margin-bottom: 0px;
	margin-left: 0px;
}
-->
</style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>

</head>

<body>

<div class="container">
  <div class="logo">
    <header><a href="index.php"><img src="apti12.png" width="290" height="170"  alt=""/></a></header>
  </div>
  <div class="sidebar1">
  
    <aside><br>
	  <h3>NEWS</h3> 
      <p>Aptitude exams dates wiil be display soon.</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </aside>
  <!-- end .sidebar1 --></div>
  <article class="content">
    <h1>Instructions</h1>
    <?php
  // If the session var is empty, show any error message and the log-in form; otherwise confirm the log-in
  if (empty($_SESSION['user_id'])) {
    echo '<p class="error">' . $error_msg . '</p>';
?>
    <form class="login"method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
    
        
    <h3 class="TextH3">Sign in</h3>
    
    <div class="LayoutRow">
        <p class="TextH5">
        <label for="emailID">Email ID</label></p>
                <p><span id="sprytextfield1">
                <input type="text" id="emailID" name="username" class="FormInputFull FormTextField TextSmall" placeholder="someone@example.com">
                <span class="textfieldRequiredMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;A value is required.</span><span class="textfieldInvalidFormatMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Invalid format.</span></span></p>
</div>
            
      <div class="LayoutRow">
        <p class="TextH5"><label for="password">Password</label></p>
          <p><span id="sprypassword1">
          <input type="password" id="password" name="password" class="FormInputFull FormTextField TextSmall" placeholder="Password">
          <span class="passwordRequiredMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;A value is required.</span><span class="passwordMinCharsMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Minimum number of characters not met.</span><span class="passwordMaxCharsMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Exceeded maximum number of characters.</span></span></p>
        </div>

            
 
    	
      <p><input name="submit" type="submit" value="Login"></p>

    <p><a href="http://www.google.com">Forgot your password?</a>  </p>
  <p>Don't have an account?<a href="register.php">Sign Up</a>  </p>
  </form>
  <?php
  }
  else {
    // Confirm the successful log-in
    echo('<p class="login">You are logged in as ' . $_SESSION['username'] . '.</p>');
  }
?>
    <section>
     <h2>What is an online aptitude Test ?</h2>
      <p>An "<strong>aptitude test</strong>" (also called a "<strong>psychometric test</strong>") is a structured systematic means of testing a job candidates' aptitudes to perform specific tasks and react to a range of different situations given. <strong>Aptitude tests</strong> each have a standardised method of administration and scoring with the results quantified and compared with all other test takers.</p>
      <p>Aptitude tests are increasingly administered online - most often after a candidate has made their initial job application - and are used to filter unsuitable applicants out of the selection process, without the need for time consuming one-to-one job interviews.</p>
      <p>Employers use aptitude tests (such as SHL, PSL and the GTIOS psychometric test alongside interviews, personality tests, application forms, assessment centres, academic results and other selection methods. No test is perfect, but all aim to give an indication of how candidates will respond to the challenges they will face in their day-to-day role at a firm.</p>
      <p>&nbsp;</p>
    </section>
    <section>
      <p>&nbsp;</p>
      <h2>Clearing goals</h2>
      <p>Online aptitude tests are designed to measure your work-related cognitive capacity. uat.com contains lots of online aptitude test which will improve users skills and knowledge about the online aptitude tests. All the online aptitude test questions in this site are objective along with the questions users will be provided with the anwers and detailed explanation.BY practising this objective online aptitude tests you can improve your skills and knowledge towords the up coming interviews. Free online aptitude tests are given with 30 random objective questons .Users can answer the questions one by one and after submiting the online aptitude test you will be provided with correct answers with detailed explanation. Examfriend.in users can discuss the online aptitude test questions with diffrent users which will improve their skills and knowledge.</p>
    </section>
    <section>
      <h2>&nbsp;</h2>
    </section>
    <section> </section>
    <!-- end .content --></article>
  <footer>
    <p style="text-align:center;">&copy;2013 Zee Group</p>
  <p style="text-align:center;"><a href="testing3.html"><font color="white">Contact Us</font></a> | <a href="aboutus.php"><font color="white">About us</font></a> | <a href="#"><font color="white">Feedback</font></a></p>
    
  </footer>
  <!-- end .container --></div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email", {validateOn:["blur"]});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {minChars:6, maxChars:30, validateOn:["blur"]});
</script>
</body>
</html>
