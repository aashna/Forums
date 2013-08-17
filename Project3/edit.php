<body bgcolor="crimson">
<?php

$con=mysql_connect("localhost", "root", "");                  // Connecting to server 

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("forum",$con);                               //Selecting database 'forum'
session_start();
$g=$_SESSION['rr'];

$sql="SELECT * FROM topic WHERE Id=$g";                      //Selecting row from the table which matches the Id


$result3=mysql_query($sql,$con);
$row = mysql_fetch_assoc($result3); 

if (!$result3) 
{                                                            // add this check.
    die('Invalid query: ' . mysql_error());
}

mysql_close($con);                                           // Exit looping and close connection

?>

<html> 
<head> 
    <link href="style.css" type="text/css" rel="stylesheet"> 
</head> 
<body> 
<font color="white" size="4"><center>Edit your topic name:</center></font> <br><br>
<form action="editprocess.php" method="post">
<center>Topic<input type="text" value="<? echo $row['topic']; ?>" name="tp"></center><br>
<center><input type="submit" value="Go!!"></center></form>


</body> 
</html>


