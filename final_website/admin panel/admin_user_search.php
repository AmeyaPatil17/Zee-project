
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function findmatch(){
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveX0bject('Microsoft.XMLHTTP');
	}
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById('results').innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open('GET','search.php?search_text=' +document.search.search_text.value, true);
	
	
	xmlhttp.send();
}
	</script>
<style type="text/css">
.searchbox {
	height: 100px;
	width: 200px;
	margin-left: 750px;
	border-top-width: thin;
	border-right-width: thin;
	border-bottom-width: thin;
	border-left-width: thin;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	margin-top: 100px;
}
</style>
</head>

<body>
<div class="searchbox">
<form id="search" name="search" action="exa.php" method="post">
type a name<br>
<input type="text" id="text" name="search_text" onKeyUp="findmatch();">
<input name="button" type="submit" id="cmdSubmit" value="Submit"/>
</form>
</div>
<div id="results"></div>
</body>
</html>


