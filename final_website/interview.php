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
  ?><br>
<br>

<center><h4><p>How to prepare for an interview</p></h4></center>
  <p>Preparing for an interview can mean the difference between getting the job or not. Here are some tips to help you make the best impression possible.</p>


<h4><p>First impression</p></h4>
<p>The first impression you make is the most important one. First impressions are primarily based on how you look and what you are wearing. That is why it's always important to dress appropriately for a job interview.
How to dress is highly dependent upon the position you are applying.
Hygiene is very important: Shower, perfume/deodorant (don't over-do it), brush your teeth thoroughly, shave or trim if appropriate, remove excess hair from nose and ear, cut your nails and make your hair nice.
Remember to smile and walk up straight. Shake hands firmly and address everyone in the room.</p>

<h4><p>Body language</p></h4>
<p>Body language can unconsciously convey many things about a person. Stand or sti up straight but still naturally. Aim for a neutral posture: Leaning back suggests boredom or lack of interest, while leaning into the conversation can seem overly solicitous or even threatening. Avoid shoving your hands in your pockets, behind your back or even crossed in front of your chest, you run the risk of appearing closed off, stiff or belligerent. You should appear open and approachable; put your hands in front of you, ready to gesture naturally.
Many people fiddle with things when they are nervous. Try not to fiddle with your pen.</p>

<h4><p>Research on the organization/company</p></h4>
<p>Get to know the organization/company that you are applying for a position with. If you have any, use your connections within the organization/company, otherwise the most research can be done online.</p>

<h4><p>Google yourself</p></h4>
<p>Find out what the company may know about you from the internet. One idea may be to limit your social network account to avoid potential employers gaining an insight into your past shenanigans.</p>

<h4><p>Important things to remember before the interview</p></h4>

<ul><p><li>Be on time</li>
<li>Get a good night's sleep</li>
<li>Turn off your phone</li>
<li>Bring a copy of your resume and references</li>
<li>Bring a pad and pen for notes during interview</li>
<li>Be polite and friendly to everyone</li>
<li>Be confident but not cocky</li>
<li>Bring a business card if relevant</li>
<li>Prepare everything latest the night before (how to get there, lay out clothes, print out references, etc.)</p></ul>
<h4><p>Prepare for common interview questions</p></h4>
<p>Consider your answers for possible interview questions. You may even practice an interview situation with a friend.</p>
<p><a href="interviewque.php">Click here</a> for a list of 30 common interview questions.</p>
     <!-- end .content --></article>
  <footer>
  <p style="text-align:center;">&copy;2013 Zee Group</p>
  <p style="text-align:center;"><a href="testing3.html"><font color="white">Contact Us</font></a> | <a href="aboutus.php"><font color="white">About us</font></a> | <a href="#"><font color="white">Feedback</font></a></p>

    
  </footer>
  <!-- end .container --></div>

</body>
</html>