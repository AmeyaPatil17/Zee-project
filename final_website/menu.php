<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>Welcome<?php echo' ' . $_SESSION['username'] . '';?></span></a></li>
         <li class='has-sub '><a href='#'><span>Profile</span></a>
            <ul>
               <li><a href='viewprofile.php'><span>View profile</span></a></li>
               <li><a href='editprofile.php'><span>Edit profile</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='logout.php'><span>Log Out</span></a></li>
</ul>
</div>
</body>
</html>