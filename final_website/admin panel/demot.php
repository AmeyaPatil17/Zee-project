<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"> 
<title>Block F5 Key In IE & Mozilla</title> 

<script language="JavaScript"> 

var version = navigator.appVersion; 

function showKeyCode(e) { 
var keycode = (window.event) ? event.keyCode : e.keyCode; 

if ((version.indexOf('MSIE') != -1)) { 
if (keycode == 116) { 
event.keyCode = 0; 
event.returnValue = false; 
return false; 
} 
} 
else { 
if (keycode == 116) { 
return false; 
} 
} 
} 

</script> 

</head> 
<body onload="JavaScript:document.body.focus();" onkeydown="return showKeyCode(event)"> 
</body> 
</html>