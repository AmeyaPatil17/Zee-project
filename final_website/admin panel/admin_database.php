<!DOCTYPE html>
<html>
<head>
<script src="jquery.min.js">
</script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
<script> 
$(document).ready(function(){
  $("#flip1").click(function(){
    $("#pane2").slideToggle("slow");
  });
});
</script>
<script> 
$(document).ready(function(){
  $("#flip2").click(function(){
    $("#pane3").slideToggle("slow");
  });
});
</script>
<script> 
$(document).ready(function(){
  $("#flip3").click(function(){
    $("#pane4").slideToggle("slow");
  });
});
</script>
<script> 
$(document).ready(function(){
  $("#flip4").click(function(){
    $("#pane5").slideToggle("slow");
  });
});
</script>
<script> 
$(document).ready(function(){
  $("#flip5").click(function(){
    $("#pane6").slideToggle("slow");
  });
});
</script>

 
<style type="text/css"> 
#panel,#flip,#pane2,#flip1,#pane3,#flip2,#pane4,#flip3,#pane5,#flip4,#pane6,#flip5
{
padding:5px;
text-align:center;
background-color:#e5eecc;
border:solid 1px #c3c3c3;
}
#panel,#pane2,#pane3,#pane4,#pane5,#pane6
{
padding:50px;
display:none;
}
</style>
</head>
<body>
 
<div id="flip">"main"Click to slide the panel down or up
</div>
<div id="panel"><?php
/* 
        VIEW.PHP
        Displays all data from 'players' table
*/

        // connect to the database
        include('connect-db.php');

        // get results from database
        $result = mysql_query("SELECT * FROM main") 
                or die(mysql_error());  
                
        // display data in table
        echo'<p><a href="new.php">Add a new record</a></p>';
		echo'<p>Use Ctrl+F to find the keyword</p>';

        echo "<table border='1' cellpadding='20'>";
        echo "<tr> <th>Q_no</th> <th>Question</th> <th>A</th> <th>B</th> <th>C</th> <th>D</th>  <th>Correct ANS</th> <th></th> <th></th></tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['Q_no'] . '</td>';
                echo '<td>' . $row['Question'] . '</td>';
                echo '<td>' . $row['answer1'] . '</td>';
				 echo '<td>' . $row['answer2'] . '</td>';
				  echo '<td>' . $row['answer3'] . '</td>';
				   echo '<td>' . $row['answer4'] . '</td>';
				    echo '<td>' . $row['correct'] . '</td>';
                echo '<td><a href="edit.php?Q_no=' . $row['Q_no'] . '">Edit</a></td>';
                echo '<td><a href="delete.php?Q_no=' . $row['Q_no'] . '">Delete</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?></div>
<div id="flip1">"com/IT"Click to slide the panel down or up
</div>
<div id="pane2"><?php
/* 
        VIEW.PHP
        Displays all data from 'players' table
*/

        // connect to the database
        include('connect-db.php');

        // get results from database
        $result = mysql_query("SELECT * FROM ce") 
                or die(mysql_error());  
                
        // display data in table
        echo'<p><a href="ce_new.php">Add a new record</a></p>';
		echo'<p>Use Ctrl+F to find the keyword</p>';

        echo "<table border='1' cellpadding='20'>";
        echo "<tr> <th>Q_no</th> <th>Question</th> <th>A</th> <th>B</th> <th>C</th> <th>D</th>  <th>Correct ANS</th> <th></th> <th></th></tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['Q_no'] . '</td>';
                echo '<td>' . $row['Question'] . '</td>';
                echo '<td>' . $row['answer1'] . '</td>';
				 echo '<td>' . $row['answer2'] . '</td>';
				  echo '<td>' . $row['answer3'] . '</td>';
				   echo '<td>' . $row['answer4'] . '</td>';
				    echo '<td>' . $row['correct'] . '</td>';
                echo '<td><a href="ce_edit.php?Q_no=' . $row['Q_no'] . '">Edit</a></td>';
                echo '<td><a href="ce_delete.php?Q_no=' . $row['Q_no'] . '">Delete</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?></div>
<div id="flip2">"extc"Click to slide the panel down or up
</div>
<div id="pane3"><?php
/* 
        VIEW.PHP
        Displays all data from 'players' table
*/

        // connect to the database
        include('connect-db.php');

        // get results from database
        $result = mysql_query("SELECT * FROM extc") 
                or die(mysql_error());  
                
        // display data in table
        echo'<p><a href="extc_new.php">Add a new record</a></p>';
		echo'<p>Use Ctrl+F to find the keyword</p>';

        echo "<table border='1' cellpadding='20'>";
        echo "<tr> <th>Q_no</th> <th>Question</th> <th>A</th> <th>B</th> <th>C</th> <th>D</th>  <th>Correct ANS</th> <th></th> <th></th></tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['Q_no'] . '</td>';
                echo '<td>' . $row['Question'] . '</td>';
                echo '<td>' . $row['answer1'] . '</td>';
				 echo '<td>' . $row['answer2'] . '</td>';
				  echo '<td>' . $row['answer3'] . '</td>';
				   echo '<td>' . $row['answer4'] . '</td>';
				    echo '<td>' . $row['correct'] . '</td>';
                echo '<td><a href="extc_edit.php?Q_no=' . $row['Q_no'] . '">Edit</a></td>';
                echo '<td><a href="extc_delete.php?Q_no=' . $row['Q_no'] . '">Delete</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?></div>
<div id="flip3">"etrx"Click to slide the panel down or up
</div>
<div id="pane4"><?php
/* 
        VIEW.PHP
        Displays all data from 'players' table
*/

        // connect to the database
        include('connect-db.php');

        // get results from database
        $result = mysql_query("SELECT * FROM etrx") 
                or die(mysql_error());  
                
        // display data in table
        echo'<p><a href="etrx_new.php">Add a new record</a></p>';
		echo'<p>Use Ctrl+F to find the keyword</p>';

        echo "<table border='1' cellpadding='20'>";
        echo "<tr> <th>Q_no</th> <th>Question</th> <th>A</th> <th>B</th> <th>C</th> <th>D</th>  <th>Correct ANS</th> <th></th> <th></th></tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['Q_no'] . '</td>';
                echo '<td>' . $row['Question'] . '</td>';
                echo '<td>' . $row['answer1'] . '</td>';
				 echo '<td>' . $row['answer2'] . '</td>';
				  echo '<td>' . $row['answer3'] . '</td>';
				   echo '<td>' . $row['answer4'] . '</td>';
				    echo '<td>' . $row['correct'] . '</td>';
                echo '<td><a href="etrx_edit.php?Q_no=' . $row['Q_no'] . '">Edit</a></td>';
                echo '<td><a href="etrx_delete.php?Q_no=' . $row['Q_no'] . '">Delete</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?></div>
<div id="flip4">"civil"Click to slide the panel down or up
</div>
<div id="pane5"><?php
/* 
        VIEW.PHP
        Displays all data from 'players' table
*/

        // connect to the database
        include('connect-db.php');

        // get results from database
        $result = mysql_query("SELECT * FROM civil") 
                or die(mysql_error());  
                
        // display data in table
        echo'<p><a href="civil_new.php">Add a new record</a></p>';
		echo'<p>Use Ctrl+F to find the keyword</p>';

        echo "<table border='1' cellpadding='20'>";
        echo "<tr> <th>Q_no</th> <th>Question</th> <th>A</th> <th>B</th> <th>C</th> <th>D</th>  <th>Correct ANS</th> <th></th> <th></th></tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['Q_no'] . '</td>';
                echo '<td>' . $row['Question'] . '</td>';
                echo '<td>' . $row['answer1'] . '</td>';
				 echo '<td>' . $row['answer2'] . '</td>';
				  echo '<td>' . $row['answer3'] . '</td>';
				   echo '<td>' . $row['answer4'] . '</td>';
				    echo '<td>' . $row['correct'] . '</td>';
                echo '<td><a href="civil_edit.php?Q_no=' . $row['Q_no'] . '">Edit</a></td>';
                echo '<td><a href="civil_delete.php?Q_no=' . $row['Q_no'] . '">Delete</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?></div>
<div id="flip5">"mech"Click to slide the panel down or up
</div>
<div id="pane6"><?php
/* 
        VIEW.PHP
        Displays all data from 'players' table
*/

        // connect to the database
        include('connect-db.php');

        // get results from database
        $result = mysql_query("SELECT * FROM mech") 
                or die(mysql_error());  
                
        // display data in table
        echo'<p><a href="mech_new.php">Add a new record</a></p>';
		echo'<p>Use Ctrl+F to find the keyword</p>';

        echo "<table border='1' cellpadding='20'>";
        echo "<tr> <th>Q_no</th> <th>Question</th> <th>A</th> <th>B</th> <th>C</th> <th>D</th>  <th>Correct ANS</th> <th></th> <th></th></tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['Q_no'] . '</td>';
                echo '<td>' . $row['Question'] . '</td>';
                echo '<td>' . $row['answer1'] . '</td>';
				 echo '<td>' . $row['answer2'] . '</td>';
				  echo '<td>' . $row['answer3'] . '</td>';
				   echo '<td>' . $row['answer4'] . '</td>';
				    echo '<td>' . $row['correct'] . '</td>';
                echo '<td><a href="mech_edit.php?Q_no=' . $row['Q_no'] . '">Edit</a></td>';
                echo '<td><a href="mech_delete.php?Q_no=' . $row['Q_no'] . '">Delete</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?></div>
</body>
</html>
