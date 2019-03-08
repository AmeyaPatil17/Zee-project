
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
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href="styles.css" rel="stylesheet" type="text/css">

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

  // Make sure the user is logged in before going any further.
  if (!isset($_SESSION['user_id'])) {
    echo '<span style="color:#FFF;text-align:center;"><p class="login">Please <a href="login.php"style="color: #FFFFFF">log in</a> to access this page.</p></span>';
    exit();
  }
  else {
    include("menu.php");
  }
  ?>
  
  <?php
 $dbc=mysqli_connect("localhost","root","","register");
    $query = "SELECT branch FROM user WHERE m_id = '" . $_SESSION['user_id'] . "'";
    $data = mysqli_query($dbc, $query);
    $row = mysqli_fetch_array($data);
   if ($row != NULL) {
      $branch = $row['branch'];

    }
    else {
      echo '<p class="error">There was a problem .</p>';
    }
   
 
 
  ?>
  <?php

$diff = 10;  //seconds for timer.
//MODIFICATION BELOW THIS LINE IS NOT REQUIRED


$hld_diff = $diff;
$timestamp = time();  //timestamp.

/*********************/
//This block is to handle session held countdowns based on the setting of $diff.
if(isset($_SESSION['ts'])) { //if timestamp is active in session
	$slice = ($timestamp - $_SESSION['ts']);	 //get the difference between the timestamps.
	$diff = $diff - $slice; //subtract the diff from the ts.
}

if(!isset($_SESSION['ts']) || $diff > $hld_diff || $diff < 0) {
	$diff = $hld_diff;
	$_SESSION['ts'] = $timestamp;	
}
/*******************/

//Below is demonstration of output.  Seconds could be passed to Javascript.
$diff; //$diff holds seconds less than 3600 (1 hour);

$hours = floor($diff / 3600) . ' : ';
$diff = $diff % 3600;
$minutes = floor($diff / 60) . ' : ';
$diff = $diff % 60;
$seconds = $diff;




?>
<div id="strclock">Clock Here!</div>
<div id="clock">Message Here</div>
<script type="text/javascript" >

 var hour = <?php echo floor($hours); ?>;
 var min = <?php echo floor($minutes); ?>;
 var sec = <?php echo floor($seconds); ?>

function checkTime() {
 var time = document.getElementById('strclock').innerHTML;
 if(time == '00:00:00') {
	window.location.reload(true);
 }
}


function countdown() {
 if(sec <= 0 && min > 0) {
  sec = 59;
  min -= 1;
 }
 else if(min <= 0 && sec <= 0) {
  min = 0;
  sec = 0;
 }
 else {
  sec -= 1;
 }
 
 if(min <= 0 && hour > 0) {
  min = 59;
  hour -= 1;
 }
 
 var pat = /^[0-9]{1}$/;
 secs = (pat.test(sec) == true) ? '0'+sec : sec;
 mins = (pat.test(min) == true) ? '0'+min : min;
 hours = (pat.test(hour) == true) ? '0'+hour : hour;
 
 document.getElementById('strclock').innerHTML = hours+":"+mins+":"+secs;
 if(min >= 1) {	
	document.getElementById('clock').innerHTML = min+1+' minutes until timer runs out!';
 }
 else {
	document.getElementById('clock').innerHTML = sec+' seconds until timer runs out!';
}
if(min ==0 && sec ==0)
{ window.location="technicalresult.php";
 document.formname.submit();

}
//checkTime();
 setTimeout("countdown()",1000);
 }
 countdown();
</script>
  <form name='formname' action="./technicalresult.php" method="post">
<?php

$connect = mysql_connect("localhost" ,"root","");

mysql_select_db("aptitude");
  
  echo $branch;
 
$query = mysql_query("SELECT * FROM ".$branch." ORDER BY RAND() LIMIT 10 ");




 while($rows = mysql_fetch_array($query)):
	
	$q = $rows['Q_no'];
	$qus = $rows['Question'];
	$a = $rows['answer1'];
	$b = $rows['answer2'];
	$c = $rows['answer3'];
	$d = $rows['answer4'];
	$ans = $rows['correct'];
	echo" <p>&nbsp;</p>";
	echo "<p>Q:-&nbsp;$qus <br></p>";
    echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;A <input type=radio name = 'answer[$q]' value = '$a'></input>$a &nbsp &nbsp<br>
"; 
    echo "&nbsp;&nbsp;&nbsp;&nbsp;B <input type=radio name = 'answer[$q]' value = '$b'></input>$b &nbsp &nbsp<br>
"; 
    echo "&nbsp;&nbsp;&nbsp;&nbsp;C <input type=radio name = 'answer[$q]' value = '$c'></input>$c &nbsp &nbsp<br>
 "; 
    echo "&nbsp;&nbsp;&nbsp;&nbsp;D <input type=radio name = 'answer[$q]' value = '$d'></input>$d <br><br> </p>";
	
	
	endwhile;
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
}
else{
	echo'<center><input name="cmdSubmit" type="submit" id="cmdSubmit" value="Submit"/>
</center>';
	}
  }
?>
</form>
  
      <!-- end .content --></article>
  <footer>
  <p style="text-align:center;">&copy;2013 Zee Group</p>
  <p style="text-align:center;"><a href="testing3.html"><font color="white">Contact Us</font></a> | <a href="aboutus.php"><font color="white">About us</font></a> | <a href="#"><font color="white">Feedback</font></a></p>

    
  </footer>
  <!-- end .container --></div>

</body>
</html>