<?php
session_start();
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
<script type="text/javascript">
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

//checkTime();
 setTimeout("countdown()",1000);
 }
 countdown();
</script>