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
	font-family: Verdana, Arial, Helvetica, sans-serif;
	background-image: url(bg.jpg);
}
/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing block. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the blocks, instead of the block elements themselves, gets rid of any box model math. A nested block with side padding can also be used as an alternate method. */
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
	color: #660066;
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
.register {
	border: thin solid #666;
	height: 300px;
	width: 400px;
}
-->
</style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
</head>

<body>


<div class="container">
  <header><a href="index.php"><img src="apti12.png" width="290" height="170"  alt=""/></a></header>
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
    </aside>
  <!-- end .sidebar1 --></div>
  <article class="content">
  <?php
  require_once('appvars.php');
  require_once('connectvars.php');

  // Connect to the database
  $dbc=mysqli_connect("localhost","root","","register");

  if (isset($_POST['submit'])) {
    // Grab the profile data from the POST
    $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
    $password1 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
    $password2 = mysqli_real_escape_string($dbc, trim($_POST['confirm']));
	$FirstName = mysqli_real_escape_string($dbc, trim($_POST['FirstName']));
	$MiddleName = mysqli_real_escape_string($dbc, trim($_POST['MiddleName']));
	$LastName = mysqli_real_escape_string($dbc, trim($_POST['LastName']));
	$dropflow = mysqli_real_escape_string($dbc, trim($_POST['dropflow']));
	$mobileno1 = mysqli_real_escape_string($dbc, trim($_POST['mobileno1']));
	$BOD = mysqli_real_escape_string($dbc, trim($_POST['BOD']));
	$branch = mysqli_real_escape_string($dbc, trim($_POST['branch']));

    if (!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
      // Make sure someone isn't already registered using this username
      $query = "SELECT * FROM user WHERE email = '$username'";
      $data = mysqli_query($dbc, $query);
      if (mysqli_num_rows($data) == 0) {
        // The username is unique, so insert the data into the database
        $query = "INSERT INTO user (email, repass, f_name, m_name, l_name, gender, mobileno, b_date, branch) VALUES ('$username', '$password2', '$FirstName', '$MiddleName', '$LastName', '$dropflow', '$mobileno1', '$BOD', '$branch')";
        mysqli_query($dbc, $query);

        // Confirm success with the user
        echo '<span style="color:#FFF;text-align:center;"><p class="login"><p>Your new account has been successfully created. You\'re now ready to <a href="login.php"style="color: #FFFFFF">log in</a>.</p></span>';

        mysqli_close($dbc);
        exit();
      }
      else {
        // An account already exists for this username, so display an error message
        echo '<p class="error">An account already exists for this username. Please use a different address.</p>';
        $username = "";
      }
    }
    else {
      echo '<p class="error">You must enter all of the sign-up data, including the desired password twice.</p>';
    }
  }

  mysqli_close($dbc);
?>
    
<form class="Register" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h3 class="TextH3">Sign UP</h3>
   <p> <a href="login.php">I already have an account</a></p>
    
    <div class="LayoutRow">
        <p class="TextH5"><label for="emailID">email ID</label></p>
                <p><span id="sprytextfield1">
                  <input type="text" id="emailID" name="username" value="<?php if (!empty($username)) echo $username; ?>" class="FormInputFull FormTextField TextSmall" placeholder="Email address">
        <span class="textfieldRequiredMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;A value is required.</span><span class="textfieldInvalidFormatMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Invalid format.</span><span class="textfieldMinCharsMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Minimum number of characters not met.</span></span></p>
</div>
            
            <div class="LayoutRow">
                <p class="TextH5"><label for="password">Password</label></p>
                <p><span id="sprypassword1">
                <input type="password" id="password" name="password2" class="FormInputFull FormTextField TextSmall" placeholder="Password">
              <span class="passwordRequiredMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;A value is required.</span><span class="passwordMinCharsMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Minimum number of characters not met.</span><span class="passwordMaxCharsMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Exceeded maximum number of characters.</span></span></p>
            </div>
            
      <div class="LayoutRow">
        <p class="TextH5"><label for="Retypepassword">Retype Password</label>  </p>
       <p> <span id="spryconfirm1">
                <label for="confirm"></label>
                <input type="password" name="confirm" id="confirm"placeholder="Retype Password">
      <span class="confirmRequiredMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;A value is required.</span><span class="confirmInvalidMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;The password don't match.</span></span></p> </div>

      <div class="LayoutRow">
        <p class="TextH5"><label for="FirstName">First Name</label></p>
                <p><span id="sprytextfield2">
                <input type="text" id="FirstName" name="FirstName" class="FormInputFull FormTextField TextSmall" placeholder="First Name">
        <span class="textfieldRequiredMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;A value is required.</span><span class="textfieldMinCharsMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Exceeded maximum number of characters.</span></span></p>
</div>

      <div class="LayoutRow">
        <p class="TextH5"><label for="MiddleName">Middle Name</label></p>
                <p><span id="sprytextfield3">
                <input type="text" id="MiddleName" name="MiddleName" class="FormInputFull FormTextField TextSmall" placeholder="Middle Name">
        <span class="textfieldRequiredMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;A value is required.</span><span class="textfieldMinCharsMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Exceeded maximum number of characters.</span></span></p>
</div>



<div class="LayoutRow">
        <p class="TextH5"><label for="LastName">Last Name</label></p>
                <p><span id="sprytextfield4">
                <input name="LastName" type="text" class="FormInputFull FormTextField TextSmall" id="LastName" placeholder="Last Name" maxlength="50">
        <span class="textfieldRequiredMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;A value is required.</span><span class="textfieldMinCharsMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Exceeded maximum number of characters.</span></span></p>
</div>


<div class="LayoutRow">
 <p class="TextH5"><label for="Gender">Gender</label></p>
<p>
<span id="spryselect1">
<label for="dropflow"></label>
<select name="dropflow" size="1" id="dropflow">
  <option value="-1"></option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
<span class="selectInvalidMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;A value is required.</span><span class="selectRequiredMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Please select an item.</span></span>
</p></div>




<div class="LayoutRow">
        <p class="TextH5"><label for="MobileNumber">Mobile Number</label></p>
                <p><span id="sprytextfield5">
                <label for="mobileno1"></label>
                <input type="text" name="mobileno1" id="mobileno1" placeholder="Mobile Number">
        <span class="textfieldRequiredMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;A value is required.</span><span class="textfieldInvalidFormatMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Invalid format.</span><span class="textfieldMinCharsMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Exceeded maximum number of characters.</span></span></p>
</div> 


                
  

<div class="LayoutRow">
        <p class="TextH5"><label for="BOD">Birth Date</label></p>
                <p><input type="date" id="BOD" name="BOD" class="FormInputFull FormTextField TextSmall" placeholder=""></p>
</div>  
 
 <div class="LayoutRow">
 <p class="TextH5"><label for="branch">Branch</label></p>
<p>
<span id="spryselect2">
<label for="branch"></label>
<select name="branch" size="1" id="branch">
  <option value="-1"></option>
  <option value="CE">CE</option>
  <option value="IT">IT</option>
  <option value="ETRX">ETRX</option>
  <option value="EXTC">EXTC</option>
  <option value="CIVIL">CIVIL</option>
  <option value="MECH">MECH.</option>
</select>
<span class="selectInvalidMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;A value is required.</span><span class="selectRequiredMsg"><img src="Red_x_cross_uncheck_bad.png" width="20" height="20">&nbsp;&nbsp;Please select an item.</span></span>
</p></div>
 
    	
      <p><input name="submit" type="submit" value="Sign up"></p>

    
</form>
<!-- end .content --></article>
  <footer>
  <p style="text-align:center;">&copy;2013 Zee Group</p>
  <p style="text-align:center;"><a href="testing3.html"><font color="white">Contact Us</font></a> | <a href="aboutus.php"><font color="white">About us</font></a> | <a href="#"><font color="white">Feedback</font></a></p>

    
  </footer>
  <!-- end .container --></div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email", {validateOn:["blur"], minChars:3});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {minChars:6, validateOn:["blur"], maxChars:30});
;
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"], minChars:1, maxChars:50});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur"], minChars:1, maxChars:50});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["blur"], minChars:1, maxChars:50});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "integer", {minChars:10, validateOn:["blur"], maxChars:14});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1", validateOn:["blur"]});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {invalidValue:"-1", validateOn:["blur"]});

var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "password");
</script>
</body>
</html>
