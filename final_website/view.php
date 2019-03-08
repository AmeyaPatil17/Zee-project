<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
        <title>View Records</title>
</head>
<body>

<?php
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
?>

</body>
</html> 