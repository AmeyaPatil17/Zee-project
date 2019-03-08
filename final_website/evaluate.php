<html>
<body>

<?php
$server = mysql_connect ('localhost', 'root', '');
mysql_select_db("aptitude", $server);
$question = mysql_query("SELECT * FROM `main`");

$x = 0;
$score = 0;
error_reporting(E_ALL);
ini_set('display_errors', 0);

while ($row = mysql_fetch_assoc($question))
{
    echo $row['Question'] . '?<br />';

    $answered = $row['answer'.$_POST['a'.$x]] ;
    $correct = $row['correct'] ;

    if ($answered == $correct ) {
        $score++;
        $acolor = 'green' ;
    }
    else {
        $acolor = 'red' ;
    }

    echo 'you answered <font color=' . $acolor . '>' . $answered . '<font color=black> <br />';


    echo 'the correct answer was ' . $correct . '<br />' ;
    echo '-------------------------------------- <br />' ;

    $x = $x + 1;
}
echo 'You had a total of ' . $score . ' out of ' . $x . ' questions right!';
mysql_close($server);
?>

</body>
</html>